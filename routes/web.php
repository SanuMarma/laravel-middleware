<?php


Route::get('/', 'HomeController@home');

Route::get('about-us', 'HomeController@about');

Route::get('contact', 'HomeController@contact');

Route::get('login', 'HomeController@login');