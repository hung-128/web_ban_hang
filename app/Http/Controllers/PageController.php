<?php

namespace App\Http\Controllers;

use App\Model\Author;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact()
    {
        $authors = Author::all();
        return view('contact', ['authors' => $authors]);
    }
    public function updateStatusWithChunk()
    {
        Author::where('status', 0)
            ->chunk(10, function ($authors) {
                $authors->each->update(['status' => 1]);
            }, $column = 'id');
        $authors = Author::all();
        return view('contact', ['authors' => $authors]);
    }

    public function updateStatusWithChunkById()
    {
        Author::where('status', 0)
            ->chunkById(10, function ($authors) {
                $authors->each->update(['status' => 1]);
            }, $column = 'id');
        $authors = Author::all();
        return view('contact', ['authors' => $authors]);
    }
    public function about()
    {
        return view('about');
    }
    public function commingSoon()
    {
        return view('comming-soon' , ['commingSoon' => 1]);
    }
}
