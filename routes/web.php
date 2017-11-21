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

/**
 * If your route only needs to return a view, you may use the Route::view method
 * Route::view('/', 'welcome');
 */

Route::get('blog/{slug}', ['as' => 'blog.single']);
Route::get('/', 'PagesController@getIndex');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::resource('posts', 'PostController');
Route::get('/create', 'PostController@create');


