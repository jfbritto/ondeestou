<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticateController extends Controller
{

    function index()
    {
        return view('login.login');
    }

    function login(Request $request)
    {

        if ($request->login == 'login' && $request->senha == 'senha') {

            session(['login' => 'usuario']);
            session(['id' => '1']);

            return response()->json(['status' => true]);
        }

        return response()->json(['status' => false, 'mensagem' => 'Usuário ou senha incorretos']);
    }

    function logout()
    {

        session()->flush();   
        return true;

    }
}
