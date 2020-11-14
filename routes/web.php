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
Route::resource('enterprises', 'EnterpriseController');

Route::resource('users', 'UserController');
Auth::routes();

Route::resource('worksheets', 'WorksheetController');
Route::resource('assistances', 'AssistanceController');
Route::resource('menuAlumno', 'menuAlumnoController');

Route::get('/home', 'HomeController@index')->name('home');