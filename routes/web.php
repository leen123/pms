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

////////////////////////////////////////////////////////
//userscontroller
Route::get('/users/add', 'UsersController@add')->name('add-user');
Route::post('/users/store', 'UsersController@store')->name('store-user');
Route::get('/users/all', 'UsersController@all')->name('all-users');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('edit-user');
Route::post('/users/edit/{id}', 'UsersController@update')->name('edit-user');
Route::get('/users/delete/{id}', 'UsersController@delete')->name('delete-user');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//caliberscontroller
Route::get('/calibers/add', 'CalibersController@add')->name('add-caliber');
Route::post('/calibers/store', 'CalibersController@store')->name('store-caliber');
Route::get('/calibers/all', 'CalibersController@all')->name('all-calibers');
Route::get('/calibers/edit/{id}', 'CalibersController@edit')->name('edit-caliber');
Route::post('/calibers/edit/{id}', 'CalibersController@update')->name('edit-caliber');
Route::get('/calibers/delete/{id}', 'CalibersController@delete')->name('delete-caliber');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//factoriescontroller
Route::get('/factories/add', 'FactoriesController@add')->name('add-factory');
Route::post('/factories/store', 'FactoriesController@store')->name('store-factory');
Route::get('/factories/all', 'FactoriesController@all')->name('all-factories');
Route::get('/factories/edit/{id}', 'FactoriesController@edit')->name('edit-factory');
Route::post('/factories/edit/{id}', 'FactoriesController@update')->name('edit-factory');
Route::get('/factories/delete/{id}', 'FactoriesController@delete')->name('delete-factory');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//shelvescontroller
Route::get('/shelves/add', 'ShelvesController@add')->name('add-shelf');
Route::post('/shelves/store', 'shelvesController@store')->name('store-shelf');
Route::get('/shelves/all', 'shelvesController@all')->name('all-shelves');
Route::get('/shelves/edit/{id}', 'shelvesController@edit')->name('edit-shelf');
Route::post('/shelves/edit/{id}', 'shelvesController@update')->name('edit-shelf');
Route::get('/shelves/delete/{id}', 'shelvesController@delete')->name('delete-shelf');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//orderdetailscontroller
Route::get('/orderdetails/add', 'OrderdetailsController@add')->name('add-orderdetail');
Route::post('/orderdetails/store', 'OrderdetailsController@store')->name('store-orderdetail');
Route::get('/orderdetails/all', 'OrderdetailsController@all')->name('all-orderdetails');
Route::get('/orderdetails/edit/{id}', 'OrderdetailsController@edit')->name('edit-orderdetail');
Route::post('/orderdetails/edit/{id}', 'OrderdetailsController@update')->name('edit-orderdetail');
Route::get('/orderdetails/delete/{id}', 'OrderdetailsController@delete')->name('delete-orderdetail');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//orderscontroller
Route::get('/orders/add', 'OrdersController@add')->name('add-order');
Route::post('/orders/store', 'OrdersController@store')->name('store-order');
Route::get('/orders/all', 'OrdersController@all')->name('all-orders');
Route::get('/orders/edit/{id}', 'OrdersController@edit')->name('edit-order');
Route::post('/orders/edit/{id}', 'OrdersController@update')->name('edit-order');
Route::get('/orders/delete/{id}', 'OrdersController@delete')->name('delete-order');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//orderscontroller
Route::get('/states/add', 'StatesController@add')->name('add-state');
Route::post('/states/store', 'StatesController@store')->name('store-state');
Route::get('/states/all', 'StatesController@all')->name('all-states');
Route::get('/states/edit/{id}', 'StatesController@edit')->name('edit-state');
Route::post('/states/edit/{id}', 'StatesController@update')->name('edit-state');
Route::get('/states/delete/{id}', 'StatesController@delete')->name('delete-state');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//permissionscontroller
Route::get('/permissions/add', 'PermissionsController@add')->name('add-permission');
Route::post('/permissions/store', 'PermissionsController@store')->name('store-permission');
Route::get('/permissions/all', 'PermissionsController@all')->name('all-permissions');
Route::get('/permissions/edit/{id}', 'PermissionsController@edit')->name('edit-permission');
Route::post('/permissions/edit/{id}', 'PermissionsController@update')->name('edit-permission');
Route::get('/permissions/delete/{id}', 'PermissionsController@delete')->name('delete-permission');

///////////////////////////////////////////////////////////

