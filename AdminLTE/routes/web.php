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

// Route::get('/', function () {
//     return view('welcome');
// });


// admin controller
Route::get('/','IndexController@index')->name('admin.index2');


// Studentcontroller
Route::get('/index2','StudentController@index2')->name('admin.index2');
Route::get('/index2/create','StudentController@create')->name('admin.create');
Route::POST('/index2/store','StudentController@store')->name('admin.store');
Route::get('/index2/edit/{id}','StudentController@edit')->name('admin.edit');
Route::get('/index2/show/{id}','StudentController@show')->name('admin.show');
Route::POST('/index2/update/{id}','StudentController@update')->name('admin.update');
Route::get('/index2/destroy/{id}','StudentController@destroy')->name('admin.destroy');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
