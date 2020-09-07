<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    function index($url = "")
    {

        if($url == ""){
            
            return view('site.home');

        }else{

            $user = DB::select( DB::raw("select * from users where url_name = '".$url."' "));
            
            if($user){

                return view('site.page', ['user'=>$user[0]]);

            }else{

                return view('site.404');

            }
            
        }

    }
}
