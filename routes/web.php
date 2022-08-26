<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/tentang', function () {
    return view('tentang');
/*    Route::get('/', function () {
        return "HAI"; */
});

 Route::get('/front', function () {
        return view('front'); 
 /*    Route::get('/', function () {
return "HAI"; */
 });
                                                
Route::get('/after', function () {
return view('after'); 
 /*    Route::get('/', function () {
        return "HAI"; */
 });

 Route::get('/', function () {
        return view('welcome'); 
         /*    Route::get('/', function () {
                return "HAI"; */
         });
