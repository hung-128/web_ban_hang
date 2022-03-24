<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function authorList(Type $var = null)
    {
        return view('authors');
    }
    public function authorDetail(Type $var = null)
    {
        return view('author-detail');
    }
}
