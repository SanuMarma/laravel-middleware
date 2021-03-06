<?php


Route::get('/', 'HomeController@home');

Route::get('about-us', 'HomeController@about');

Route::get('contact', 'HomeController@contact');

Route::get('login', 'HomeController@login');

Route::post('loginStore', 'HomeController@loginStore');

Route::get('logout', 'HomeController@logout');

Route::group(['middleware' => 'logged'], function(){
	Route::get('dashboard', 'HomeController@dashboard');
});

Route::get('join', 'HomeController@join');
