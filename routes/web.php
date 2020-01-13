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

Route::get('/', function () {
    $message = "But Laravel is awesome 🔥";
    $language = ['PHP', 'Javascript', 'JAVA', 'Python', 'Golang'];
    $number = 10 * 5;
    return view('test', [
        'language' => $language,
        'message' => $message,
        'number' => $number
    ]);
});

Route::get('about', function () {
    return 'from about';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
