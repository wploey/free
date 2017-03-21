<?php
/**
 * Created by PhpStorm.
 * User: wploey
 * Date: 17-3-22
 * Time: 上午1:40
 */

namespace App\Api\Controllers;


use App\Api\Transformers\NewsTransformer;
use App\Models\Lide\News;

class NewsController extends BaseController
{
    public function index()
    {
        $news = News::all();

        return $this->collection($news, new NewsTransformer());
    }

    public function show($id)
    {
        $new = News::find($id);
        if(! $new){
            return $this->response->errorNotFound('New not found');
        }

        return $this->item($new, new NewsTransformer());
    }
}