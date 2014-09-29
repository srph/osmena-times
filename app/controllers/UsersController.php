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
		return View::make('dashboard.users.index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$user = new User;
		$user->fill($input);
		$user->save();

		Session::flash(
			'user.store.success',
			"$user->username has been successfully created"
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
		$user = User::findOrFail($id);
		return View::make();
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
		return View::make('dashboard.users.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$user = User::findOrFail($id);
		$user->save($input);

		Session::flash(
			'user.update.success',
			"$user->username has been successfully updated"
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

		Session::flash(
			'user.delete.success',
			"$user->username has been successfully deleted"
		);
		return Redirect::route('dashboard.users.index');
	}


}
