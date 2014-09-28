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

Route::group(['prefix' => 'dashboard', 'namespace' => 'dashboard'], function()
{
	Route::resource('news', 'NewsController');
	Route::controller('/', 'DashboardController');
});


Route::controller('/', 'HomeController');