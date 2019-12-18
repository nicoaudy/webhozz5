<?php

// HTTP VERB :
// GET
// POST
// PUT/PATCH
// DELETE

Route::get('/', function () {
	$message = "But Laravel is awesome 🔥";
	$language = ['PHP', 'Javascript', 'JAVA', 'Python', 'Golang'];
	return view('test', [
		'language' => $language,
		'message' => $message
	]);
});

Route::get('about', function () {
	return 'from about';
});
