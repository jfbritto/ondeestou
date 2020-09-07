<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Session;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function register()
    {
        return view('login.register');
    }

    //buscar user
    public function searchUserById()
    {
        $response = $this->userService->searchUserById(auth()->user()->id);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success', 'data'=>$response['data']], 201);
            
        return response()->json(['status'=>'error', 'message'=>$response['data']], 500);
    }

    //editar user
    public function editUser(Request $request)
    {

        $data = [
            'id' => $request->id,
            'name' => trim($request->name) ,
            'city' => trim($request->city),
            'bio' => trim($request->bio),
        ];

        $response = $this->userService->editUser($data);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success'], 201);

        return response()->json(['status'=>'error', 'message'=>$response['data']], 201);
    }

    //adicionar user
    public function addUser(Request $request)
    {

        $data = [
            'name' => trim($request->name),
            'url_name' => trim($request->url_name),
            'email' => trim($request->email) ,
            'password' => bcrypt(trim($request->password)),
            'avatar' => null,
            'bio' => null,
            'city' => null,
            'phone' => null,
            'id_theme' => null,
            'is_root' => 0,
            'is_admin' => 1,
            'id_admin' => null
        ];

        $response = $this->userService->addUser($data);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success'], 201);

        return response()->json(['status'=>'error', 'message'=>$response['data']], 201);
    }
}