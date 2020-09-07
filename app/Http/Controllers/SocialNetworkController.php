<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SocialNetworkService;

class SocialNetworkController extends Controller
{
    private $socialNetworkService;

    public function __construct(SocialNetworkService $socialNetworkService)
    {
        $this->socialNetworkService = $socialNetworkService;
    }

    //buscar redes
    public function search()
    {
        $response = $this->socialNetworkService->index();

        if($response['status'] == 'success')
            return response()->json(['status'=>'success', 'data'=>$response['data']], 201);
            
        return response()->json(['status'=>'error', 'message'=>$response['data']], 500);
    }
}
