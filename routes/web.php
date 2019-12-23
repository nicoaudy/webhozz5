<?php

// HTTP VERB :
// GET
// POST
// PUT/PATCH
// DELETE

Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');

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
