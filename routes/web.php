<?php

// Home Route
Route::get('/', 'HomeController@index');

// Sign Up Process Routes
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::post('/signup', 'SignupController@validateForm')->name('signup.validateForm');
Route::get('/signup/plans', 'SignupController@plans')->name('signup.plans');
Route::get('/signup/sendMail', 'SignupController@sendMail')->name('signup.sendMail');
Route::get('/signup/success', 'SignupController@success')->name('signup.success');