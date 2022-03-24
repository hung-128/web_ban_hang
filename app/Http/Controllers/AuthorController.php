<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthorController extends Controller
{
    public function authorList()
    {
        $isAdmin = User::isAdmin();
        if ($isAdmin) {
            return view('admin.authors');
        }
        return view('authors');
    }
    public function authorDetail()
    {
        return view('author-detail');
    }
}
