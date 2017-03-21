<?php

namespace App\Http\Controllers\Lide;

use App\Models\Lide\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return News::all();
    }
}
