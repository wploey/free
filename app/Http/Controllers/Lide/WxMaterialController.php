<?php

namespace App\Http\Controllers\Lide;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WxMaterialController extends Controller
{
    public $material;

    /**
     * MaterialController constructor.
     * @param $material
     */
    public function __construct(Application $material)
    {
        $this->material = $material->material;
    }

    public function image()
    {
        $image = $this->material->uploadImage(public_path().'/images/skate.jpg');
        return $image;
    }
    public function audio()
    {

    }
}
