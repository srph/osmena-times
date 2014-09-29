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

Route::group(['prefix' => 'dashboard'], function()
{
	Route::resource('news', 'NewsController');
	Route::controller('/', 'DashboardController', [
		'getIndex'	=> 'dashboard',
		'getLogin'	=> 'dashboard.login',
		'postLogin'	=> 'dashboard.attempt'
	]);
});


Route::controller('/', 'HomeController');