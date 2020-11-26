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

$router->post('product','ProductController@createProduct');   //for creating product

$router->get('product/{id}','ProductController@updateProduct'); //for updating product

$router->post('product/{id}','ProductController@deleteProduct');  // for deleting product

$router->get('product','ProductController@index'); // for retrieving product
