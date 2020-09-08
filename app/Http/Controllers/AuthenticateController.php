<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class AuthenticateController extends Controller
{

    function index()
    {
        // dd(auth()->user());
        // Mail::raw();
        return view('login.login');
    }

    function login(Request $request)
    {


        $credentials = array('email' => $request->login, 'password' => $request->senha);

        if(auth()->attempt($credentials)){

            return response()->json(['status' => true]);

        }

        return response()->json(['status' => false, 'mensagem' => 'Usuário ou senha incorretos']);
    }

    function logout()
    {

        auth()->logout();
        session()->flush();
        return true; 

    }
}
