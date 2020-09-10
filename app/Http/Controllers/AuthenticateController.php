<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\RecoverPasswordMail;
use App\User;
use DB;

class AuthenticateController extends Controller
{

    public function index()
    {        
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

    public function forgotPassTela()
    {
        return view('login.forgot-pass');
    }

    public function forgotPass(Request $request)
    {

        $find_user = User::where('email', $request->email)->first();

        if($find_user){

            try{

                DB::beginTransaction();
    
                $token = md5(date("Y-m-d H:i:s").$find_user->id.date("Y-m-d H:i:s", strtotime("+1 hour")));
    
                DB::table('users')->where('id', $find_user->id)->update(['time_token' => date("Y-m-d H:i:s", strtotime("+1 hour")),'token_email' => $token]);
                
                $find_user = User::where('email', $request->email)->first();

                DB::commit();
    
                Mail::send(new RecoverPasswordMail($find_user));
                
                return response()->json(['status' => 'success']);

            }catch(Exception $e){
                DB::rollBack();
                return response()->json(['status'=>'error', 'message'=>'Putz! não conseguimos te enviar o email!'], 201);
            }

        }else{
            return response()->json(['status'=>'error', 'message'=>'Putz! não encontramos esse email na nossa base :('], 201);
        }
        
    }

    public function changePassTela()
    {
        if(!isset($_GET['tk']))
            return view('site.404', ['error' => true]);
            
        $token = $_GET['tk'];

        $find_user = User::where('token_email', $token)->where('time_token','>', date("Y-m-d H:i:s"))->first();

        if($find_user){

            return view('login.change-pass', ['token'=>$token]);
        }else{
            return view('site.404', ['error' => true]);
        }

    }

    public function changePass(Request $request)
    {

        $find_user = User::where('token_email', $request->token)->where('time_token','>', date("Y-m-d H:i:s"))->first();

        if($find_user){

            $email = $find_user->email;

            try{

                DB::beginTransaction();

                $pass = bcrypt(trim($request->password));
    
                DB::table('users')->where('id', $find_user->id)->update(['password' => $pass,'token_email' => null,'time_token' => null]);

                DB::commit();
                
                return response()->json(['status' => 'success']);

            }catch(Exception $e){
                DB::rollBack();
                return response()->json(['status'=>'error', 'message'=>'Putz! não conseguimos te enviar o email!'], 201);
            }

        }else{
            return response()->json(['status'=>'error', 'message'=>'Putz! não encontramos esse email na nossa base :('], 201);
        }
        
    }
}
