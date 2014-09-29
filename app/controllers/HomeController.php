<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$news = News::paginate(6);
		
		return View::make('app.index.template')
			->with('news', $news);
	}

	public function about()
	{
		return View::make('app.about');
	}

	public function article($id)
	{
		$main = News::findOrFail($id);
		$news = News::orderBy('id', 'desc')
			->take(10)
			->get();

		return View::make('app.news.view')
			->with('main', $main)
			->with('news', $news);
	}

	public function user($username)
	{
		$user = User::where('username', $username)
			->firstOrFail();

		$news = $user->news()
			->orderBy('id', 'desc')
			->take(10)
			->get();

		return View::make('app.users.view')
			->with('user', $user)
			->with('news', $news);
	}

}