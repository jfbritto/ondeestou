<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    public function index(Request $request, $url = "")
    {

        if($url == ""){
            
            return view('site.home', ['error' => false]);

        }else{

            $user = DB::select( DB::raw("select * from users where url_name = '".$url."' "));
            
            if($user){

                if(($user[0]->latitude == null || $user[0]->latitude == "") && ($user[0]->longitude == null || $user[0]->longitude == "")){
                    $link = "#";
                }else{
                    $link = "https://www.google.com/maps/search/?api=1&query=".$user[0]->latitude.",".$user[0]->longitude;
                }

                $from = $request->header('REFERER');

                return view('site.page', ['user'=>$user[0], 'link'=>$link, 'from'=>$from]);

            }else{

                return view('site.404', ['error' => true]);

            }
            
        }

    }
}
