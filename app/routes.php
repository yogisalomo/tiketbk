<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getHome');
Route::get('/planes', 'HomeController@getPlane');
Route::get('/tickets', 'HomeController@getTicket');
Route::get('/customers', 'HomeController@getCustomer');
Route::get('/pesan', 'HomeController@getPesan');