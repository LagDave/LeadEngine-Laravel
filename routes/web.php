<?php

// Home Route
Route::get('/', 'HomeController@index')->name('home');

// Sign Up Process Routes
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::post('/signup/personal-information', "SignupController@personalInformation")->name('signup.personalInformation');
Route::get('/signup/plans', 'SignupController@plans')->name('signup.plans');
Route::get('/signup/survey', 'SignupController@surveyPage')->name('signup.survey');
Route::post('/signup', 'SignupController@validateForm')->name('signup.validateForm');
Route::get('/signup/sendMail', 'SignupController@sendMail')->name('signup.sendMail');

Route::get('/signup/success', 'SignupController@success')->name('signup.success');
Route::get('/signup/cancel', 'SignupController@cancel')->name('signup.cancel');

//  FAQ PAGE
Route::get('/faq', 'FaqController@index')->name('faq');