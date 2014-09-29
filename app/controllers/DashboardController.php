<?php

class DashboardController extends \BaseController {

	/**
	 * Class constructor
	 *
	 */
	public function __construct()
	{
		$this->beforeFilter('auth', ['except' => 'getLogin']);
		$this->beforeFilter('guest', ['only' => 'getLogin']);
	}

	/**
	 * Display a listing of the resource.
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
	public function getLogin()
	{
		return View::make('dashboard.login');
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

		if ( Auth::attempt($account) )
		{
			return Redirect::route('dashboard');
		}

		return Redirect::back()
			->with('login.error', 'Invalid username/password');
	}


}
