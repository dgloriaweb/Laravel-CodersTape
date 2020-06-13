<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('home','home');
Route::view('contact','contact');
Route::view('about','about');

Route::get('customers','CustomersController@list');
