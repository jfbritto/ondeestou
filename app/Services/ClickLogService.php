<?php

namespace App\Services;

use App\ClickLog;
use DB;
use Exception;

class ClickLogService
{
    
    public function addLog(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $clickLog = ClickLog::create($data);

            DB::commit();

            $response = ['status' => 'success', 'data' => $clickLog];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function loadViews($id)
    {
        $response = [];

        try{

            $return = DB::select( DB::raw("select 
                                                * 
                                            from 
                                                click_logs cl
                                                join users us on cl.id_user=us.id
                                            where
                                                cl.type_log = 'V'
                                                and us.id = '".$id."';"));

            $response = ['status' => 'success', 'data' => $return];
        }catch(Exception $e){
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function loadClicks($id)
    {
        $response = [];

        try{

            $return = DB::select( DB::raw("select 
                                                sn.icon, sn.name, count(*) as total
                                            from 
                                                click_logs cl
                                                join links lk on cl.id_link=lk.id
                                                join social_networks sn on lk.id_social_network=sn.id
                                                join users us on lk.id_user=us.id
                                            where
                                                cl.type_log = 'C'
                                                and us.id = '".$id."'
                                            group by
                                                sn.name
                                            order by
                                                3 desc"));

            $response = ['status' => 'success', 'data' => $return];
        }catch(Exception $e){
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

}