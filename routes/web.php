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
Route::get('/profile', 'RouteController@profile');

Route::resource('posts', 'PostController');
Route::resource('replies', 'ReplyController');
Route::resource('tags', 'TagController');
Route::resource('categories', 'CategoryController');
Route::resource('comments', 'CommentController');

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');