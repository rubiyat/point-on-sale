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

Route::group(['middleware'=>'web'], function(){

    Route::get('/admin', function(){

<<<<<<< HEAD
        return view('admin.index');
=======
Route::get('/admin/productcategory/create', function () {
    return view('admin.productcategory.create');
});

Route::get('/admin/productcategory/edit', function () {
    return view('admin.productcategory.edit');
});
>>>>>>> 821a885e863b15dad15815e3e86f1014a4ea798a




    });

	Route::resource('admin/productcategory', 'ProductCategoryController',['names'=>[


    	'index'=>'admin.productcategory.index',
    	'create'=>'admin.productcategory.create',
    	'store'=>'admin.productcategory.store',
    	'edit'=>'admin.productcategory.edit',
        'show'=>'admin.productcategory.show'






	]]);

});