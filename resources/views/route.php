<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front'); 
/*    Route::get('/', function () {
        return "HAI"; */
});

Route::get('/', function () {
    return view('after'); 
/*    Route::get('/', function () {
        return "HAI"; */
});