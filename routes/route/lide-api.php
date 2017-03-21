<?php
/**
 * Created by PhpStorm.
 * User: METOO3
 * Date: 2017-03-21
 * Time: 13:58
 */

Route::group(['prefix' => '/api/v1'], function () {
    Route::resource('news','Lide\NewsController');
});