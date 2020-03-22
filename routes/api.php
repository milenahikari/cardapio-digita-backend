<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category', 'CategoryController@getCategories');
Route::get('/category/{idCategory}', 'CategoryController@findCategory');
Route::get('/category/{idCategory}/product', 'ProductController@getProductsForCategory');
Route::post('/category', 'CategoryController@postCategory');

Route::get('/product', 'ProductController@getProducts');
Route::get('/product/{id}', 'ProductController@findProduct');
Route::post('/product', 'ProductController@postProduct');
