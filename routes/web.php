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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/productcategory', function () {
    return view('admin.productcategory.index');
});

Route::get('/admin/productcategory/edit', function () {
    return view('admin.productcategory.edit');
});

Route::get('/admin/productcategory/show', function () {
    return view('admin.productcategory.show');
});
