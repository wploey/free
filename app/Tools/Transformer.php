<?php
/**
 * Created by PhpStorm.
 * User: wploey
 * Date: 17-3-21
 * Time: 下午11:02
 */

namespace App\Tools;


abstract class Transformer
{
    public function transformCollection($items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}