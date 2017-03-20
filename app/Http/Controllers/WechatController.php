<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;

class WechatController extends Controller
{
    public function token(){
        $options = [
            'debug'  => env('WX_DEBUG'),
            'app_id' => env('WX_APP_ID'),
            'secret' => env('WX_SECRET'),
            'token'  => env('WX_TOKEN'),
            // 'aes_key' => null, // 可选
            'log' => [
                'level' => 'debug',
                'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
            ],
            //...
        ];

        $app = new Application($options);
        $response = $app->server->serve();
        return $response;
    }
}
