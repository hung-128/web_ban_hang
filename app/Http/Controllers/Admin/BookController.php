<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        $title = 'Create book';

        $css = ['plugins/summernote/summernote-bs4.min.css'];
        $js = [
            'plugins/summernote/summernote-bs4.min.js',
            'js/admin/books/create.js',
            'plugins/bs-custom-file-input/bs-custom-file-input.min.js',
        ];
        return view('admin.book.create', ['title' => $title, 'css' => $css, 'js' => $js]);
    }
}
