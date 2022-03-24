<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact()
    {
        return view('contact');
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
