<?php

namespace App\Http\Controllers\Lide;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WxUsersController extends Controller
{
    public $wechat;

    /**
     * UsersController constructor.
     * @param $wechat
     */
    public function __construct(Application $wechat)
    {
        $this->wechat = $wechat;
    }

    public function users()
    {
        $users = $this->wechat->user->lists();
        return $users;
    }

    /**
     * @param $openid
     * @return mixed
     */
    public function user($openid)
    {
        $user = $this->wechat->user->get($openid);
        return $user;
    }

    public function remark()
    {
        $this->wechat->user->remark('o7eRFwKJ4G6Mh0WfAXmaV1nOiqy4', '东哥');
        return 'ok';
    }
}
