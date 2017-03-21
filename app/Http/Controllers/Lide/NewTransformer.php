<?php
/**
 * Created by PhpStorm.
 * User: wploey
 * Date: 17-3-21
 * Time: 下午11:07
 */

namespace App\Http\Controllers\Lide;


use App\Tools\Transformer;

class NewTransformer extends Transformer
{
    public function transform($new)
    {
        return [
            'title' => $new['title'],
            'body' => $new['body'],
            'is_view' => (boolean)$new['view']
        ];
    }
}