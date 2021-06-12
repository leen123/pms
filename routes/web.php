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
//warehousescontroller
Route::get('/warehouses/add', 'WarehouseController@add')->name('add-warehouse');
Route::post('/warehouses/store', 'WarehouseController@store')->name('store-warehouse');
Route::get('/warehouses/all', 'WarehouseController@all')->name('all-warehouses');
Route::get('/warehouses/edit/{id}', 'WarehouseController@edit')->name('edit-warehouse');
Route::post('/warehouses/edit/{id}', 'WarehouseController@update')->name('edit-warehouse');
Route::get('/warehouses/delete/{id}', 'WarehouseController@delete')->name('delete-warehouse');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//chemicalnamescontroller
Route::get('/chemicalnames/add', 'ChemicalnamesController@add')->name('add-chemicalname');
Route::post('/chemicalnames/store', 'ChemicalnamesController@store')->name('store-chemicalname');
Route::get('/chemicalnames/all', 'ChemicalnamesController@all')->name('all-chemicalnames');
Route::get('/chemicalnames/edit/{id}', 'ChemicalnamesController@edit')->name('edit-chemicalname');
Route::post('/chemicalnames/edit/{id}', 'ChemicalnamesController@update')->name('edit-chemicalname');
Route::get('/chemicalnames/delete/{id}', 'ChemicalnamesController@delete')->name('delete-chemicalname');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//rolescontroller
Route::get('/roles/add', 'RolesController@add')->name('add-role');
Route::post('/roles/store', 'RolesController@store')->name('store-role');
Route::get('/roles/all', 'RolesController@all')->name('all-roles');
Route::get('/roles/edit/{id}', 'RolesController@edit')->name('edit-role');
Route::post('/roles/edit/{id}', 'RolesController@update')->name('edit-role');
Route::get('/roles/delete/{id}', 'RolesController@delete')->name('delete-role');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//typescontroller
Route::get('/types/add', 'TypesController@add')->name('add-type');
Route::post('/types/store', 'TypesController@store')->name('store-type');
Route::get('/types/all', 'TypesController@all')->name('all-types');
Route::get('/types/edit/{id}', 'TypesController@edit')->name('edit-type');
Route::post('/types/edit/{id}', 'TypesController@update')->name('edit-type');
Route::get('/types/delete/{id}', 'TypesController@delete')->name('delete-type');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//billscontroller
Route::get('/bills/add', 'BillsController@add')->name('add-bill');
Route::post('/bills/store', 'BillsController@store')->name('store-bill');
Route::get('/bills/all', 'BillsController@all')->name('all-bills');
Route::get('/bills/edit/{id}', 'BillsController@edit')->name('edit-bill');
Route::post('/bills/edit/{id}', 'BillsController@update')->name('edit-bill');
Route::get('/bills/delete/{id}', 'BillsController@delete')->name('delete-bill');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//billscontroller
Route::get('/bills/add', 'BillsController@add')->name('add-bill');
Route::post('/bills/store', 'BillsController@store')->name('store-bill');
Route::get('/bills/all', 'BillsController@all')->name('all-bills');
Route::get('/bills/edit/{id}', 'BillsController@edit')->name('edit-bill');
Route::post('/bills/edit/{id}', 'BillsController@update')->name('edit-bill');
Route::get('/bills/delete/{id}', 'BillsController@delete')->name('delete-bill');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//billdetailscontroller
Route::get('/billdetails/add', 'BilldetailsController@add')->name('add-billdetail');
Route::post('/billdetails/store', 'BilldetailsController@store')->name('store-billdetail');
Route::get('/billdetails/all', 'BilldetailsController@all')->name('all-billdetails');
Route::get('/billdetails/edit/{id}', 'BilldetailsController@edit')->name('edit-billdetail');
Route::post('/billdetails/edit/{id}', 'BilldetailsController@update')->name('edit-billdetail');
Route::get('/billdetails/delete/{id}', 'BilldetailsController@delete')->name('delete-billdetail');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//LocationsController
Route::get('/locations/add', 'LocationsController@add')->name('add-location');
Route::post('/locations/store', 'LocationsController@store')->name('store-location');
Route::get('/locations/all', 'LocationsController@all')->name('all-locations');
Route::get('/locations/edit/{id}', 'LocationsController@edit')->name('edit-location');
Route::post('/locations/edit/{id}', 'LocationsController@update')->name('edit-location');
Route::get('/locations/delete/{id}', 'LocationsController@delete')->name('delete-location');

///////////////////////////////////////////////////////////


////////////////////////////////////////////////////////
//ProductsController
Route::get('/products/add', 'ProductsController@add')->name('add-product');
Route::post('/products/store', 'ProductsController@store')->name('store-product');
Route::get('/products/all', 'ProductsController@all')->name('all-products');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('edit-product');
Route::post('/products/edit/{id}', 'ProductsController@update')->name('edit-product');
Route::get('/products/delete/{id}', 'ProductsController@delete')->name('delete-product');

///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//PharmaciesController
Route::get('/pharmacies/add', 'PharmaciesController@add')->name('add-pharmacy');
Route::post('/pharmacies/store', 'PharmaciesController@store')->name('store-pharmacy');
Route::get('/pharmacies/all', 'PharmaciesController@all')->name('all-pharmacies');
Route::get('/pharmacies/edit/{id}', 'PharmaciesController@edit')->name('edit-pharmacy');
Route::post('/pharmacies/edit/{id}', 'PharmaciesController@update')->name('edit-pharmacy');
Route::get('/pharmacies/delete/{id}', 'PharmaciesController@delete')->name('delete-pharmacy');

///////////////////////////////////////////////////////////
