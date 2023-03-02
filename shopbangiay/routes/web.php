<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/abouts', 'App\Http\Controllers\AboutController@index')->name("about.index");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/typepdts', 'App\Http\Controllers\TypeProductController@index')->name("typepdt.index");
Route::get('/typepdts/{id}', 'App\Http\Controllers\TypeProductController@show')->name("typepdt.show");

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::post('/cart/add{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
});

// Route::middleware('admin')->group(function () {
Route::get(
    '/admin',
    'App\Http\Controllers\Admin\AdminHomeController@index'
)
    ->name("admin.home.index");

Route::get(
    '/admin/products',
    'App\Http\Controllers\Admin\AdminProductController@index'
)
    ->name("admin.product.index");

Route::post(
    "/admin/products/store",
    "App\Http\Controllers\Admin\AdminProductController@store"
)
    ->name("admin.product.store");

Route::delete(
    '/admin/products/{id}/delete',
    'App\Http\Controllers\Admin\AdminProductController@delete'
)
    ->name("admin.product.delete");


Route::get(
    '/admin/products/{id}/edit',
    'App\Http\Controllers\Admin\AdminProductController@edit'
)
    ->name("admin.product.edit");
Route::put(
    '/admin/products/{id}/update',
    'App\Http\Controllers\Admin\AdminProductController@update'
)
    ->name("admin.product.update");

// -----
Route::get(
    '/admin/typepdts',
    'App\Http\Controllers\Admin\AdminTypeProductController@index'
)
    ->name("admin.typepdt.index");

Route::post(
    "/admin/typepdts/store",
    "App\Http\Controllers\Admin\AdminTypeProductController@store"
)
    ->name("admin.typepdt.store");

Route::delete(
    '/admin/typepdts/{id}/delete',
    'App\Http\Controllers\Admin\AdminTypeProductController@delete'
)
    ->name("admin.typepdt.delete");


Route::get(
    '/admin/typepdts/{id}/edit',
    'App\Http\Controllers\Admin\AdminTypeProductController@edit'
)
    ->name("admin.typepdt.edit");
Route::put(
    '/admin/typepdts/{id}/update',
    'App\Http\Controllers\Admin\AdminTypeProductController@update'
)
    ->name("admin.typepdt.update");
//-----------
Route::get(
    '/admin/abouts',
    'App\Http\Controllers\Admin\AdminAboutController@index'
)
    ->name("admin.about.index");

Route::post(
    "/admin/abouts/store",
    "App\Http\Controllers\Admin\AdminAboutController@store"
)
    ->name("admin.about.store");

Route::delete(
    '/admin/abouts/{id}/delete',
    'App\Http\Controllers\Admin\AdminAboutController@delete'
)
    ->name("admin.about.delete");


Route::get(
    '/admin/abouts/{id}/edit',
    'App\Http\Controllers\Admin\AdminAboutController@edit'
)
    ->name("admin.about.edit");
Route::put(
    '/admin/abouts/{id}/update',
    'App\Http\Controllers\Admin\AdminAboutController@update'
)
    ->name("admin.about.update");
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
