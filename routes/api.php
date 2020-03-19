<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('posts', 'RestController@all')->name('posts');
Route::get('posts/{id}', 'RestController@getOne')->name('onePost');
Route::put('posts', 'RestController@add')->name('addPost');
Route::put('posts/{id}', 'RestController@update')->name('updatePost');
Route::delete('posts/{id}', 'RestController@delete')->name('deletePost');

