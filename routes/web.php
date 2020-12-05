<?php

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

Route::get('/', 'RouteController@index')->name('homepage');
Route::get('/bio', 'RouteController@bio');

Route::group(['prefix' => 'blog/'], function () {
    Route::view('/', 'blog.index')->name('blog.index');
    Route::get('/{slug}', [App\Http\Livewire\Post::class, 'render']);
});


Route::group(['prefix' => 'admin/', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('posts', 'PostController');
    Route::resource('replies', 'ReplyController');
    Route::resource('tags', 'TagController');
    Route::resource('categories', 'CategoryController');
    Route::resource('comments', 'CommentController');
    Route::resource('setting', 'AdminDetailController');
    Route::get('pages/check_slug', 'RouteController@check_slug')->name('pages.check_slug');
    Route::get('posts/slugger', 'PostController@checkSlug')->name('posts.checkSlug');
    Route::get('trash/posts', 'PostController@trashed')->name('posts.trashed');
    Route::get('restore/post/{id}', 'PostController@restore')->name('posts.restore');
    Route::get('kill/post/{id}', 'PostController@kill')->name('posts.kill');
});

Auth::routes(['register' => false]);
Route::get('/mysql', 'RouteController@phpmyadmin');