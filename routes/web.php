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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//orders
Route::get('/order/details/{product_id}', 'OrderController@details')->where('product_id', '[0-9]+')->name('details');
Route::post('/order/store', 'OrderController@store')->name('makeOrder');
Route::get('/order/success', 'OrderController@success');

//products
Route::get('/product/show/{product_id}', 'ProductController@show')->where('product_id', '[0-9]+')->name('product.show');
Route::get('/product/list/{category_id}', 'ProductController@list')->where('category_id', '[0-9]+')->name('product.list');


//Cabinet

Route::group(['namespace' => 'Cabinet', 'prefix' => 'cabinet', 'middleware' => 'auth'], function () {
    Route::get('/', 'CabinetController@myOrders')->name('my-orders');
    Route::get('/my-orders', 'CabinetController@myOrders')->name('my-orders');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin' /*, 'middleware' =>'admin'*/], function () {
//    Route::get('/', 'DashboardController@index');
    Route::resource('/', 'ProductsController');
    Route::resource('/products', 'ProductsController');
    Route::get('/products/image/edit/{id}', 'ProductsController@edit_image')->name('product.image_edit');
    Route::post('/products/image/edit', 'ProductsController@update_image')->name('product.image_update');
    Route::delete('/products/image/delete', 'ProductsController@delete_image')->name('product.image_delete');
    Route::post('/products/image/add', 'ProductsController@add_image')->name('product.image_add');
    Route::resource('/users', 'UsersController');

    Route::resource('/orders', 'OrdersController');


    Route::resource('/categories', 'CategoriesController');

});
