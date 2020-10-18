<?php

use App\Http\Controllers\RouteController;
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

Route::get('/', 'RouteController@index');
Route::get('/bio', 'RouteController@bio');
Route::get('/blog', 'RouteController@blog');
Route::get('/setting', 'RouteController@setting');

Route::resource('/home/posts', 'PostController');
Route::resource('/home/replies', 'ReplyController');
Route::resource('/home/tags', 'TagController');
Route::resource('/home/categories', 'CategoryController');
Route::resource('/home/comments', 'CommentController');

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');