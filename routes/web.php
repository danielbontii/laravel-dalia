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

Route::get('/profile/{user}', 'ProfileController@show')->name('profiles.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profiles.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profiles.update');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{user}/toggle-role', 'UserController@toggleRole')->name('users.toggleRole');
