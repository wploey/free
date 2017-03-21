<?php
/**
 * Created by PhpStorm.
 * User: wploey
 * Date: 17-3-22
 * Time: 上午1:52
 */

namespace App\Api\Transformers;


use App\Models\Lide\News;
use League\Fractal\TransformerAbstract;

class NewsTransformer extends TransformerAbstract
{
    public function transform(News $new)
    {
        return [
            'title' => $new['title'],
            'body' => $new['body'],
            'is_view' => (boolean)$new['view']
        ];
    }
}