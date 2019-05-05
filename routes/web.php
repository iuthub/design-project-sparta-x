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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Cabinet', 'prefix' => 'cabinet', 'middleware' => 'auth'], function () {
    Route::get('/', 'CabinetController@myOrders');
    Route::get('/my-orders', 'CabinetController@myOrders');
});


Route::group(['prefix'=>'admin', 'namespace'=>'Admin' /*, 'middleware' =>'admin'*/], function(){
//    Route::get('/', 'DashboardController@index');
    Route::resource('/products', 'ProductsController');
    Route::get('/products/image/edit/{id}', 'ProductsController@edit_image')->name('product.image_edit');
    Route::post('/products/image/edit', 'ProductsController@update_image')->name('product.image_update');
    Route::delete('/products/image/delete', 'ProductsController@delete_image')->name('product.image_delete');
    Route::post('/products/image/add', 'ProductsController@add_image')->name('product.image_add');


    Route::resource('/categories', 'CategoriesController');
//    Route::resource('/users', 'UsersController');

});
