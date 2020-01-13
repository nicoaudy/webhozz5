<?php

// HTTP VERB :
// GET
// POST
// PUT/PATCH
// DELETE

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

Route::get('/', 'WelcomeController');

Route::get('about', function () {
    return 'from about';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
