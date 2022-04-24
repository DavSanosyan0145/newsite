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
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/news', 'HomeController@news')->name('news');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/admin', 'AdminController@index')->name('admin');

//=== User Routs ===//

Route::get('/admin/users', 'UserController@index')->name('users');

Route::get('/admin/users/create', 'UserController@create')->name('users_create');

Route::post('/admin/users/store', 'UserController@store')->name('users_store');

Route::get('/admin/users/edit/{id}', 'UserController@edit')->name('users_edit');

Route::get('/admin/users/delete/{id}', 'UserController@destroy')->name('users_delete');

Route::post('/admin/users/update', 'UserController@update')->name('users_update');

//=== News Routs ===//

Route::get('/admin/newses', 'NewsController@index')->name('news');

Route::get('/admin/newses/create', 'NewsController@create')->name('news_create');

Route::post('/admin/newses/store', 'NewsController@store')->name('news_store');

Route::get('/admin/newses/delete/{id}', 'NewsController@destroy')->name('news_delete');

Route::get('/admin/newses/edit/{id}', 'NewsController@edit')->name('news_edit');

Route::post('/admin/newses/update', 'NewsController@update')->name('news_update');
