<?php

namespace App\Models\Lide;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'lide_news';
//    protected $hidden = ['title'];
    protected $fillable = ['title', 'body', 'user_id', 'view'];
}
