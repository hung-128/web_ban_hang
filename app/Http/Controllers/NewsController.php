<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsList(Type $var = null)
    {
        return view('news');
    }
    public function newsDetail(Type $var = null)
    {
        return view('news-detail');
    }
}
