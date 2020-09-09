<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\RecoverPasswordMail;

class AuthenticateController extends Controller
{

    function index()
    {

        return view('login.login');
    }

    function login(Request $request)
    {


        $credentials = array('email' => $request->login, 'password' => $request->senha);

        if(auth()->attempt($credentials)){

            Mail::to('jf.britto@hotmail.com')->send(new RecoverPasswordMail());
            
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
