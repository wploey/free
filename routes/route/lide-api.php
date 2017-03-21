<?php
/**
 * Created by PhpStorm.
 * User: METOO3
 * Date: 2017-03-21
 * Time: 13:58
 */

//Route::group(['prefix' => '/api/v1'], function () {
//    Route::resource('news','Lide\NewsController');
//});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace'=>'App\Api\Controllers'], function ($api){
        $api->post('user/login','AuthController@authenticate');
        $api->post('user/register','AuthController@register');
        $api->group(['middleware'=>'jwt.auth'],function ($api){
            $api->get('user/me','AuthController@getAuthenticatedUser');
            $api->get('news', 'NewsController@index');
            $api->get('news/{id}', 'NewsController@show');
        });

    });
});