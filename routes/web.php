<?php

use Illuminate\Support\Facades\Route;

//SITE
Route::get('/', 'SiteController@index');

//LOGIN
Route::get('/login', 'AuthenticateController@index');
Route::post('/login', 'AuthenticateController@login');
Route::post('/logout', 'AuthenticateController@logout');

Route::group(['middleware' => ['authenticate']], function(){

    //pagina inicaial
    Route::get('/home', 'HomeController@home');
    
    //configurações da conta
    Route::get('/config', 'HomeController@config');

    //analytics
    Route::get('/analytic', 'HomeController@analytic');

});
