<?php

namespace App\Services;

use App\User;
use DB;
use Exception;

class UserService
{
    
    public function searchUserById($id)
    {
        $response = [];

        try{

            $return = DB::select( DB::raw("select * from users where id = '".$id."' "));

            $response = ['status' => 'success', 'data' => $return];
        }catch(Exception $e){
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function editUser(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $user = DB::table('users')
                        ->where('id', $data['id'])
                        ->update([  'name' => $data['name'],
                                    'url_name' => $data['url_name'],
                                    'city' => $data['city'],
                                    'state' => $data['state'],
                                    'latitude' => $data['latitude'],
                                    'longitude' => $data['longitude'],
                                    'bio' => $data['bio']]
                        );

            DB::commit();

            $response = ['status' => 'success', 'data' => $user];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function editPass(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $user = DB::table('users')
                        ->where('id', $data['id'])
                        ->update([  'password' => $data['password']]
                        );

            DB::commit();

            $response = ['status' => 'success', 'data' => $user];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

    public function addUser(array $data)
    {
        $response = [];

        try{

            DB::beginTransaction();

            $user = User::create($data);

            DB::commit();

            $response = ['status' => 'success', 'data' => $user];

        }catch(Exception $e){
            DB::rollBack();
            $response = ['status' => 'error', 'data' => $e->getMessage()];
        }

        return $response;
    }

}