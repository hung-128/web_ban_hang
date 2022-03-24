<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookList()
    {
        $isAdmin = User::isAdmin();
        if ($isAdmin) {
            $title = 'Author';
            return view('admin.books',);
        }
        return view("books");
    }
    public function bookDetail()
    {
        return view("book-detail");
    }
}
