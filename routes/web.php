<?php

// HTTP VERB :
// GET
// POST
// PUT/PATCH
// DELETE

Auth::routes();
Route::get('/', 'WelcomeController');

Route::middleware('auth')->group(function () {
    // Nampilin table
    Route::get('/category', 'CategoryController@index');
    // Show form
    Route::get('/category/create', 'CategoryController@create');
    // Insert ke db
    Route::post('/category', 'CategoryController@store');
    // Show form Edit
    Route::get('/category/{id}/edit', 'CategoryController@edit');
    // Update ke db
    Route::put('/category/{id}', 'CategoryController@update');
    // Delete db
    Route::delete('/category/{id}', 'CategoryController@destroy');

    Route::resource('products', 'ProductController');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('transaction', 'TransactionController');
    Route::resource('transaction-detail', 'TransactionDetailController');

    Route::post('add-to-cart/{id}', 'CartController');
    Route::get('checkout', 'CheckoutController@index');
    Route::post('checkout/{id}', 'CheckoutController@pay');
});

Route::get('about', function () {
    return 'from about';
});
