<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(["verify" => true]);
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('category', 'BookController@bookList')->name('bookList');
    Route::get('book-detail', 'BookController@bookDetail')->name('bookDeatail');
    Route::get('news', 'NewsController@newsList')->name('newsList');
    Route::get('news-detail', 'NewsController@newsDetail')->name('newsDetail');
    Route::get('authors', 'NewsController@authorList')->name('authorList');
});

