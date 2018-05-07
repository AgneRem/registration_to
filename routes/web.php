<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/create', 'RegistrationController@create');
Route::get('/edit', 'RegistrationController@edit');

Route::post('/registrations', 'RegistrationController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registrations/{registration}', 'RegistrationController@show');

Route::group(['middleware' => 'auth'], function(){
  Route::get('/admin', 'RegistrationController@index');
});
