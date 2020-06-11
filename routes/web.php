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

Route::get('/', 'studentController')->name('student');
Route::get('/new', 'studentController@add')->name('student.add');
Route::post('/new', 'studentController@insert')->name('student.insert');
Route::get('/edit/{id}', 'studentController@edit')->name('student.edit');
Route::post('/edit/{id}', 'studentController@update')->name('student.update');
Route::get('/delete/{id}', 'studentController@delete')->name('student.delete');