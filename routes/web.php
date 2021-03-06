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

Route::get('/', function () {
    return redirect()->route('posts');
});

Route::get('/posts/all', 'BlogController@posts')->name('posts');
Route::get('/posts/add', 'BlogController@addPostPage')->name('addPostPage');
Route::get('/posts/update/{id}', 'BlogController@updatePostPage')->name('updatePostPage');

Route::post('/posts/add', 'BlogController@addPost')->name('addPost');
Route::post('/posts/update/{id}', 'BlogController@updatePost')->name('updatePost');



