<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::post('/', 'App\Http\Controllers\ProductController@store');
