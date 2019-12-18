<?php


Route::get('/', function () {
	return view('test');
});

Route::get('about', function () {
	return 'from about';
});
