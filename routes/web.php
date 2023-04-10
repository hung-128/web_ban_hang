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
Route::get('/demo', 'HomeController@demo')->name('demo');
Route::get('/updateStatusWithChunkById', 'PageController@updateStatusWithChunkById')->name('chunkById');
Route::get('/updateStatusWithChunk', 'PageController@updateStatusWithChunk')->name('chunk');
Route::get('/demo', 'HomeController@demo')->name('demo');
Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('category', 'BookController@bookList')->name('bookList');
    Route::get('book-detail', 'BookController@bookDetail')->name('bookDeatail');
    Route::get('news', 'NewsController@newsList')->name('newsList');
    Route::get('news-detail', 'NewsController@newsDetail')->name('newsDetail');
    Route::get('authors', 'AuthorController@authorList')->name('authorList');
    Route::get('author-detail', 'AuthorController@authorDetail')->name('authorDetail');
});
Route::get('/demoChunk', 'PageController@contact')->name('contact');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/commingSoon', 'PageController@commingSoon')->name('commingSoon');

Route::prefix('admin')->middleware('auth', 'is_admin')->group(function () {
    Route::get('home', 'HomeController@adminHome')->name('admin.home');
    Route::get('users', 'UserController@userList')->name('admin.listUser');
    Route::get('authors', 'AuthorController@authorList')->name('admin.authorList');
    Route::get('news', 'NewsController@listNews')->name('admin.listNews');
    Route::get('categories', 'CategoryController@listCategory')->name('admin.listCategory');
    Route::prefix('books')->group(function () {
        Route::get('create', 'Admin\BookController@create')->name('admin.createBook');
    });
    Route::prefix('role-permission')->group(function () {
        Route::get('createView/{id?}', 'Admin\RolePermissionController@createEditView')->name('admin.createRolePermission')->where('id', '[0-9]+');
        Route::post('create/{id?}', 'Admin\RolePermissionController@createEdit')->name('admin.createRolePermissionProcess')->where('id', '[0-9]+');
        Route::get('list', 'Admin\RolePermissionController@list')->name('admin.listRolePermission');
    });
});

Route::get('sheet', 'SheetController@getSheet');
