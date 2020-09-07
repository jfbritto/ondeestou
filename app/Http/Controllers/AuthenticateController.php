<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticateController extends Controller
{

    function index()
    {
        // dd(auth()->user());
        return view('login.login');
    }

    function login(Request $request)
    {


        $credentials = array('email' => $request->login, 'password' => $request->senha);

        if(auth()->attempt($credentials)){

            return response()->json(['status' => true]);

        }

        // if ($request->login == 'login' && $request->senha == 'senha') {

        //     session(['login' => 'usuario']);
        //     session(['id' => '1']);

        //     return response()->json(['status' => true]);
        // }

        return response()->json(['status' => false, 'mensagem' => 'Usuário ou senha incorretos']);
    }

    function logout()
    {

        auth()->logout();
        session()->flush();
        return redirect('/'); 

    }
}
