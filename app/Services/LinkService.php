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

            $return = DB::select( DB::raw("select * from links where id = '".$id."'"));

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
                                                lk.id, lk.link, sn.name, sn.icon, sn.color 
                                            from 
                                                links lk join social_networks sn on lk.id_social_network=sn.id 
                                            where 
                                                lk.id_user = '".$id."' 
                                            group by 
                                                lk.id 
                                            order by sn.name"));

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

}