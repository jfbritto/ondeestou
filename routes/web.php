<?php

use Illuminate\Support\Facades\Route;

//SITE
Route::get('/', 'SiteController@index');

//LOGIN
Route::get('/login', 'AuthenticateController@index');
Route::post('/login', 'AuthenticateController@login');

Route::get('/forgot-pass', 'AuthenticateController@forgotPassTela');
Route::post('/forgot-pass', 'AuthenticateController@forgotPass');

Route::get('/change-pass', 'AuthenticateController@changePassTela');
Route::post('/change-pass', 'AuthenticateController@changePass');

//REGISTER
Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@addUser');

Route::group(['middleware' => ['authenticate']], function(){

    //logout
    Route::post('/logout', 'AuthenticateController@logout');

    //pagina inicaial
    Route::get('/home', 'HomeController@home');
    //configurações da conta
    Route::get('/config', 'HomeController@config');
    //analytics
    Route::get('/analytic', 'HomeController@analytic');
    
    //SOCIAL NETWORK
    Route::get('/search-social-network', 'SocialNetworkController@search');
    
    //LINK
    Route::post('/add-link', 'LinkController@addLink');
    Route::post('/edit-link', 'LinkController@editLink');
    Route::post('/edit-order-link', 'LinkController@editOrderLink');
    Route::get('/search-links', 'LinkController@searchLinksByUser');
    Route::get('/search-links-by-url', 'LinkController@searchLinksByUrl');
    Route::get('/search-link-by-id', 'LinkController@searchLinkById');
    
    //USER
    Route::get('/search-user-by-id', 'UserController@searchUserById');
    Route::post('/edit-user', 'UserController@editUser');
    Route::post('/edit-pass', 'UserController@editPass');
    Route::post('/edit-url', 'UserController@editUrl');

    Route::post('upload-image','UserController@uploadImage')->name('upload.image');
    Route::post('save-cropped-image','UserController@saveCroppedImage')->name('crop.image');

    //CLICK
    Route::get('/search-views', 'ClickLogController@loadViews');
    Route::get('/search-clicks', 'ClickLogController@loadClicks');

});

//ROTA PUBLICA DOS CLICK
Route::post('/add-click', 'ClickLogController@addClick');
Route::post('/add-view', 'ClickLogController@addView');

//ROTA PUBLICA DOS LINKS
Route::get('/search-links-by-url', 'LinkController@searchLinksByUrl');
Route::get('/{link}', 'SiteController@index');