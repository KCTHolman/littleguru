<?php

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
Route::get('/','pagecontroller@welcome');
Route::get('/contact','pagecontroller@contact');
 //Route::get('/','pagecontroller@overmij');
 //Route::get('/zwangerschapsyoga','pagecontroller@zwangerschapsyoga');
 //Route::get('/babymassage','pagecontroller@babymassage');
 //Route::get('/partnerlessen','pagecontroller@partnerlessen');

 //Route::get('/contact', function(){
 //   return view('contact');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
