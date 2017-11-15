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

Route::get('/', 'pagesController@index');

// Route::get('/hello', function () {
//     return '<H1>Hello world<H1>';
// });

// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'This is users'.$name.'with an id of'. $id;
// });

Route::get('/about', 'pagesController@about');
Route::get('/services', 'pagesController@services');

Route::resource ('posts', 'PostsController');

