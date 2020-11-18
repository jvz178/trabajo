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

Route::get('error', function(){
    return view('error');
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('cycles', 'CycleController');
    Route::resource('enterprises', 'EnterpriseController');

   });


Route::group(['middleware' => 'al'], function () {
    Route::resource('assistances', 'AssistanceController');
    Route::resource('menuAlumno', 'menuAlumnoController');
    Route::resource('worksheets', 'WorksheetController');
   });

Route::group(['middleware' => 'tut_c'], function () {
    Route::resource('tasks', 'TaskController');
    Route::resource('modules', 'ModuleController');
    Route::resource('menuTutorE', 'menuTutorEController');
    Route::resource('cce', 'CeController');
    Route::resource('rra', 'RaController');
    
});

Route::group(['middleware' => 'tut_e'], function () {

    Route::resource('menuTutorEn', 'menuTutorEnController');
});

Auth::routes();









