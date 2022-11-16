<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('newsletter');
});

Route::post('/submit','App\Http\Controllers\NewsController@submit'); 



