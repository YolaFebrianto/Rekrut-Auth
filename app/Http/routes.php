<?php

Route::get('/', 'MainController@index');
Route::post('/','MainController@store');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => ['auth']], function()
{
	Route::get('/response/{id}', 'MailController@index');
	Route::post('/response/{id}', 'MailController@mailsent');
	Route::get('/data','MainController@admin');
});

Route::auth();

Route::get('/home', 'MainController@index');
