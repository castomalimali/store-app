<?php
// use route from illuminate
use Illuminate\Support\Facades\Route;

//use controller homeController
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductContoller;
//get home route from homeController
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/products','App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}','App\Http\Controllers\ProductController@show')->name("product.show");

//get admin home route from controller
Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products', 'App\Http\Controllers\AdminProductController@index')->name("admin.product.index");
//Post product route
Route::post('/admin/products/store','App\Http\Controllers\AdminProductController@store')->name("admin.product.store");
// Delete product route
Route::delete('/admin/products/{id}/delete','App\Http\Controllers\AdminProductController@delete')->name("admin.product.delete");
//Routes for edit
Route::get('/admin/products/{id}/edit','App\Http\Controllers\AdminProductController@edit')->name("admin.product.edit");
//for update
Route::put('/admin/products/{id}','App\Http\Controllers\AdminProductController@update')->name("admin.product.update");
