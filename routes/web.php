<?php

// Home Route
Route::get('/', 'HomeController@index')->name('home');

// Sign Up Process Routes
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::post('/signup/personal-information', "SignupController@personalInformation")->name('signup.personalInformation');
Route::get('/signup/plans', 'SignupController@plans')->name('signup.plans');
Route::get('/onboarding_survey', 'SignupController@surveyPage')->name('signup.survey');
Route::post('/signup', 'SignupController@validateForm')->name('signup.validateForm');
Route::get('/signup/sendMail', 'SignupController@sendMail')->name('signup.sendMail');
Route::get('/onboarding_survey/success', 'SignupController@onboardingSurveySuccess')->name('onboarding_survey.success');

Route::get('/signup/success', 'SignupController@success')->name('signup.success');
Route::get('/signup/cancel', 'SignupController@cancel')->name('signup.cancel');

//  FAQ PAGE
Route::get('/faq', 'FaqController@index')->name('faq');

// Resell PAGE
Route::get('/resell', 'ResellController@index')->name('resell');

// White Labelling Page
Route::get('white_label', 'WhiteLabelController@index')->name('whiteLabel');
Route::post('white_label/signup', 'WhiteLabelController@signup')->name('whiteLabel.signup');
Route::get('white_label/payment', 'WhiteLabelController@payment')->name('whiteLabel.payment');
Route::get('white_label/survey', 'WhiteLabelController@survey')->name('whiteLabel.survey');
Route::get('white_label/sendMail', 'WhiteLabelController@sendMail')->name('whiteLabel.sendMail');
Route::get('white_label/success', 'WhiteLabelController@success')->name('whiteLabel.success');