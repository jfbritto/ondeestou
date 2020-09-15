<?php

namespace App\Services;

use App\Link;
use DB;
use Exception;

class LinkService
{
    
    public function searchLinkById($id)
    {
        $response = [];

        try{

            $return = DB::select( DB::raw("select lk.*, sn.name as name_social from links lk join social_networks sn on lk.id_social_network=sn.id where lk.id = '".$id."'"));

            $response = ['status' => 'success', 'data' => $return];
        }catch(Exception $e){
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }
    
    public function searchLinksByUser($id)
    {
        $response = [];

        try{

            $return = DB::select( DB::raw("select 
                                                lk.id, lk.link, lk.status, lk.order_link, lk.name, sn.name as icon_name, sn.icon, sn.color 
                                            from 
                                                links lk join social_networks sn on lk.id_social_network=sn.id 
                                            where 
                                                lk.id_user = '".$id."' 
                                            group by 
                                                lk.id 
                                            order by lk.order_link"));

            $response = ['status' => 'success', 'data' => $return];
        }catch(Exception $e){
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function addLink(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $link = Link::create($data);

            DB::commit();

            $response = ['status' => 'success', 'data' => $link];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function editLink(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $link = DB::table('links')
                        ->where('id', $data['id'])
                        ->update(['id_social_network' => $data['id_social_network'],
                                'name' => $data['name'],
                                'phone' => $data['phone'],
                                'msg' => $data['msg'],
                                'link' => $data['link']]
                        );

            DB::commit();

            $response = ['status' => 'success', 'data' => $link];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function editLinkStatus(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $link = DB::table('links')
                        ->where('id', $data['id'])
                        ->update(['status' => $data['status']]
                        );

            DB::commit();

            $response = ['status' => 'success', 'data' => $link];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function editOrderLink(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $link = DB::table('links')->where('id', $data['id'])->update(['order_link' => $data['order_link']]);

            $lk = DB::select( DB::raw("select * from links where id = '".$data['id']."'"))[0];
            $ord = $lk->order_link;
            $links = DB::select( DB::raw("select * from links where id_user = '".$lk->id_user."' and order_link >= '".$lk->order_link."' and id <> '".$lk->id."' order by order_link"));

            foreach ($links as $item) {
                $ord++;
                DB::table('links')->where('id', $item->id)->update(['order_link' => $ord]);
            }


            DB::commit();

            $response = ['status' => 'success', 'data' => $link];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

}