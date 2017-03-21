<?php
/**
 * Created by PhpStorm.
 * User: METOO3
 * Date: 2017-03-21
 * Time: 13:58
 */
Route::any('wechat', 'Lide\WxController@serve');

Route::prefix('wx')->group(function () {
    Route::get('/', 'Lide\WxController@index');
    //用户
    Route::get('users', 'Lide\WxUsersController@users');
    Route::get('users/{openId}', 'Lide\WxUsersController@user');
});
//Route::group(['prefix' => 'wx'], function () {
//    Route::get('/', 'Lide\WxController@index');
//    //用户
//    Route::get('users', 'Lide\WxUsersController@users');
//    Route::get('users/{openId}', 'Lide\WxUsersController@user');
//
////    Route::get('remark', 'Lide\UsersController@remark');
////    Route::get('image', 'Lide\MaterialController@image');
////    Route::get('audio', 'Lide\MaterialController@audio');
//});
