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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/users', 'UserController@store')->name('user.store');
Route::get('/users/{id}', 'UserController@destroy')->name('user.delete');
Route::get('/blogs','BlogController@index')->name('blog.index');
Route::get('/blogs/create','BlogController@create')->name('blog.create');
Route::post('/blogs','BlogController@store')->name('blog.store');
Route::get('/blogs/{id}','BlogController@destroy')->name('blog.destroy');
Route::get('/blogs/show/{id}','BlogController@show')->name('blog.show');
Route::get('/blogs/edit/{id}','BlogController@edit')->name('blog.edit');
Route::put('/blogs/{id}/edit','BlogController@update')->name('blog.update');
Route::put('/blogs/ajax/table','BlogController@table')->name('blog.table');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
