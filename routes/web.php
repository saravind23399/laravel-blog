<?php

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

Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('posts/create', ['as' => 'posts.create', 'uses' => 'PostsController@create']);
Route::post('posts/create', 'PostsController@store');
Route::get('posts/{id}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
