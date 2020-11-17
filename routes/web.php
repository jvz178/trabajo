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


Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
   });

Route::resource('cycles', 'CycleController');
Route::resource('enterprises', 'EnterpriseController');


Auth::routes();

Route::resource('worksheets', 'WorksheetController');
Route::resource('assistances', 'AssistanceController');
Route::resource('menuAlumno', 'menuAlumnoController');

Route::resource('menuTutorE', 'menuTutorEController');
Route::resource('menuTutorEn', 'menuTutorEnController');


Route::resource('tasks', 'TaskController');
Route::resource('modules', 'ModuleController');

Route::resource('cce', 'CeController');
Route::resource('rra', 'RaController');

