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

            $msg = "Usuário ".$request->login." acabou de logar!";
            file_get_contents('https://api.telegram.org/bot1366316005:AAHoexLlhQeRJ5OJEAWPF_dj1dmaSUb1iEc/sendMessage?chat_id=-1001312472436&text='.$msg.'');

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
