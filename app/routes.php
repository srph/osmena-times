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
	Route::resource('users', 'UsersController');
	Route::resource('news', 'NewsController');
	Route::controller('/', 'DashboardController', [
		'getIndex'	=> 'dashboard',
		'postLogin'	=> 'dashboard.login',
		'getLogout'	=> 'dashboard.logout'
	]);
});


Route::controller('/', 'HomeController');