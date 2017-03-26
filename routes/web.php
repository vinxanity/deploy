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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => '/admin', 'middleware' => 'auth.admin'], function () {
  Route::get('/', function () {
    return "HOME ADMIN";
  });
  Route::get('/prodotti', function () {
      return "PRODOTTI ADMIN";
  });
  Route::get('/r3', function () {
    return "3";
  });
});


