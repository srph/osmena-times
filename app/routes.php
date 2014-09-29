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

App::error(function(Illuminate\Database\Eloquent\ModelNotFoundException $exception)
{
	return View::make('etc.missing');
});

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


Route::get('@{username}', ['as' => 'profile', 'uses' => 'HomeController@user']);
Route::get('news/{id}', ['as' => 'article', 'uses' => 'HomeController@article']);
Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);