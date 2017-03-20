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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/deploy', 'DeploymentController@deploy');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test', 'HomeController@test');
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();
Route::any('/wechat', 'WechatController@serve');
Route::get('/home', 'HomeController@index');
