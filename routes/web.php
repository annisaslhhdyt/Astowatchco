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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'IndexController@index')->name('index');

Route::prefix('products')->group(function() {
    Route::get('{id}', 'ProductController@show')->name('show');
});

Route::prefix('cart')->group(function(){
    Route::get('{id}', 'CartController@show')->name('show');
});


// Route::prefix('toegoe')->group(function() {
//     Route::get('{id}', 'ToegoeController@show')->name('show');
// });


// Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/toegoe', function () {
    return view('toegoe');
});

Route::get('/monjali', function () {
    return view('monjali');
});

Route::get('/malioboro', function () {
    return view('products');
});

Route::get('/round', function () {
    return view('round');
});

Route::get('/hexagonal', function () {
    return view('hexagonal');
});

Route::get('/strap', function () {
    return view('strap');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/bestseller', function () {
    return view('bestseller');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
