<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ClickLogService;
use DB;
use Session;

class ClickLogController extends Controller
{
    private $clickLogService;

    public function __construct(ClickLogService $clickLogService)
    {
        $this->clickLogService = $clickLogService;
    }

    //cadastrar click
    public function addClick(Request $request)
    {

        $data = [
            'type_log' => 'C',
            'id_link' => $request->id_link,
            'id_user' => NULL,
        ];

        $response = $this->clickLogService->addLog($data);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success'], 201);

        return response()->json(['status'=>'error', 'message'=>$response['data']], 201);
    }

    //cadastrar view
    public function addView(Request $request)
    {

        if(!session()->has('view')){
        
            $user = DB::select( DB::raw("select * from users where url_name = '".$request->url_name."' "));

            if($user){

                $data = [
                    'type_log' => 'V',
                    'id_link' => NULL,
                    'id_user' => $user[0]->id,
                ];
        
                $response = $this->clickLogService->addLog($data);

                session(['view' => '1']);

            }else{
                return response()->json(['status'=>'error', 'message'=>'Usuário não encontrado'], 201);
            }

            if($response['status'] == 'success')
                return response()->json(['status'=>'success'], 201);

            return response()->json(['status'=>'error', 'message'=>$response['data']], 201);

        }else{
            return response()->json(['status'=>'error', 'message'=>'View já registrada'], 201);
        }
    }

    //buscar views
    public function loadViews()
    {
        $response = $this->clickLogService->loadViews(auth()->user()->id);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success', 'data'=>$response['data']], 201);
            
        return response()->json(['status'=>'error', 'message'=>$response['data']], 500);
    }

    //buscar links
    public function loadClicks()
    {
        $response = $this->clickLogService->loadClicks(auth()->user()->id);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success', 'data'=>$response['data']], 201);
            
        return response()->json(['status'=>'error', 'message'=>$response['data']], 500);
    }
}
