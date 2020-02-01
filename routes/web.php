<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('posts/{post}', 'PostController@show')->name('posts.show');
Route::post('posts/{post}/comments', 'CommentController@store')->name('comments.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
