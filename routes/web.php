<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

////////////////////////////////////////////////////////
//formatscontroller
Route::get('/formats/add', 'FormatsController@add')->name('add-format');
Route::post('/formats/store', 'FormatsController@store')->name('store-format');
Route::get('/formats/all', 'FormatsController@all')->name('all-formats');
Route::get('/formats/edit/{id}', 'FormatsController@edit')->name('edit-format');
Route::post('/formats/edit/{id}', 'FormatsController@update')->name('edit-format');
Route::get('/formats/delete/{id}', 'FormatsController@delete')->name('delete-format');

///////////////////////////////////////////////////////////

