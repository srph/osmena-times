<?php

class UsersController extends \BaseController {

	/**
	 * Class constructor
	 * Adds 'filter' to all controller methods
	 */
	public function __construct()
	{
		$this->beforeFilter('auth', ['except' => 'show']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(10);

		return View::make('dashboard.users.index')
			->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dashboard.users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$user = new User([
			'username'		=> Input::get('username'),
			'password'		=> Hash::make(Input::get('password'))
		]);
		$user->save();

		$profile = new Profile([
			'user_id'		=> $user->id,
			'name' 			=> Input::get('name'),
			'about_me'		=> Input::get('about_me'),
			'twitter'		=> Input::get('twitter'),
			'facebook'		=> Input::get('facebook')
		]);

		$user->profile()->save($profile);

		Session::flash(
			'users.store.success',
			"$user->username has been successfully created."
		);
		return Redirect::route('dashboard.users.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// 
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return View::make('dashboard.users.edit')
			->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$password = Hash::make(Input::get('password'));
		$user = User::findOrFail($id);
		$user->update(['password' => $password]);

		Session::flash(
			'users.update.success',
			"$user->username has been successfully updated."
		);
		return Redirect::route('dashboard.users.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		$user->profile->delete();

		Session::flash(
			'users.delete.success',
			"$user->username has been successfully deleted"
		);
		
		return Response::json(['status' => true]);
	}


}
