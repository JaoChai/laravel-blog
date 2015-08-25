<?php

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

Route::get('/posts/{slug}', [
	'as' => 'post-show',
	'uses' => 'PostController@getShow'
]);