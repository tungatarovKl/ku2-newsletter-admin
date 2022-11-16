<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
#use Request;

Route::get('/', function () {
    return view('newsletter');
});

Route::post('/submit','App\Http\Controllers\NewsController@submit'); 
/*
function () {
    dd(Request::all());
});
*/

