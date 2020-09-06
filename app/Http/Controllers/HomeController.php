<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        return view('home.home');
    }
    
    function config()
    {
        return view('home.config');
    }
    
    function analytic()
    {
        return view('home.analytic');
    }
}
