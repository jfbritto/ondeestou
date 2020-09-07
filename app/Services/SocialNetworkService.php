<?php

namespace App\Services;

use App\SocialNetwork;
use DB;
use Exception;

class SocialNetworkService
{
    public function index()
    {
        $response = [];

        try{

            $return = DB::select( DB::raw("select * from social_networks order by name"));

            $response = ['status' => 'success', 'data' => $return];
        }catch(Exception $e){
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

}