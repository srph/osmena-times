<?php

class DashboardController extends \BaseController {

	/**
	 * Class constructor
	 *
	 */
	public function __construct()
	{
		$this->beforeFilter('guest', ['only' => 'postLogin']);
		$this->beforeFilter('auth', ['only' => 'getIndex']);
	}

	/**
	 * Display a 	listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('dashboard.index.template');
	}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		$account = [
			'username'	=> Input::get('username'),
			'password'	=> Input::get('password')
		];

		if ( Auth::attempt($account, false) )
		{
			return Redirect::route('dashboard');
		}

		Session::flash('login.error', 'Invalid username/password');
		return Redirect::back();
	}

	/**
	 *
	 */
	public function getLogout()
	{
		Auth::logout();
		Session::flash('logout', 'You have been successfully logged out!');
		return Redirect::route('dashboard');
	}


}
