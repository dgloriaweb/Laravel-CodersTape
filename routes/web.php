<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

Route::view('/','home');
Route::view('home','home');
Route::view('contact','contact');
Route::view('about','about');



// Route::resource('customers','CustomersController');
Route::get('customers','CustomersController@index');
Route::get('customers/create','CustomersController@create');
Route::post('customers','CustomersController@store');
