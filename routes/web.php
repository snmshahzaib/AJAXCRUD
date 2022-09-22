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

Route::get('students', 'StudentController@index');
Route::post('students','StudentController@store')->name('add.student');
Route::get('fetch-students', 'StudentController@fetchstudent')->name('get.student');
Route::get('edit-students/{id}', 'StudentController@edit')->name('edit.student');
Route::put('update-students/{id}', 'StudentController@update')->name('update.student');
Route::get('delete-students/{id}', 'StudentController@destroy')->name('delete.student');
