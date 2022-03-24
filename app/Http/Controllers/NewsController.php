<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class NewsController extends Controller
{
    public function newsList()
    {
        // $is_admin =$this->User->isAdmin();
        return view('news');
    }
    public function newsDetail()
    {
        return view('news-detail');
    }
}
