<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookList()
    {
        return view("books");
    }
    public function bookDetail()
    {
        return view("book-detail");
    }
}
