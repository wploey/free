<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('/deploy', 'DeploymentController@deploy');
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');


Route::group(['domain' => 'free.com'],function(){
    include __DIR__ .'/route/lide-web.php';
    include __DIR__ .'/route/lide-api.php';
    include __DIR__ .'/route/lide-wx.php';
});