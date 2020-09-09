<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\RecoverPasswordMail;

class AuthenticateController extends Controller
{

    public function index()
    {
        // Mail::send(new RecoverPasswordMail());
        
        return view('login.login');
    }

    public function login(Request $request)
    {


        $credentials = array('email' => $request->login, 'password' => $request->senha);

        if(auth()->attempt($credentials)){

            return response()->json(['status' => true]);

        }

        return response()->json(['status' => false, 'mensagem' => 'Usuário ou senha incorretos']);
    }

    public function logout()
    {

        auth()->logout();
        session()->flush();
        return true; 

    }
}
