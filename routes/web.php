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

        return view('admin.index');

    });

    Route::resource('admin/productcategory', 'ProductCategoryController');

    Route::resource('admin/supplier', 'SupplierController');

    Route::resource('admin/role', 'RoleController');

    Route::resource('admin/products', 'ProductsController');

    Route::resource('admin/customer', 'CustomerController');

    Route::resource('admin/employee', 'EmployeeController');

    Route::resource('admin/purchase', 'PurchasesController');

    Route::resource('admin/sales', 'SalesController');





	// Route::resource('admin/productcategory', 'ProductCategoryController',['names'=>[


 //    	'index'=>'admin.productcategory.index',
 //    	'create'=>'admin.productcategory.create',
 //    	'store'=>'admin.productcategory.store',
 //    	'edit'=>'admin.productcategory.edit',
 //        'show'=>'admin.productcategory.show',


	// ]]);

});


