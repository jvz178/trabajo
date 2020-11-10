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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('cycles', 'CycleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
<<<<<<< HEAD
=======

Route::resource('enterprises', 'EnterpriseController');

Route::resource('users', 'UserController');
>>>>>>> 0fb5282f6a96878d5e46fb3ccfad53724ce8e04d
