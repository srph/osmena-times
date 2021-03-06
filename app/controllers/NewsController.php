<?php

class NewsController extends \BaseController {

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
		$news = News::with('user')->orderBy('id', 'desc')->paginate(10);

		return View::make('dashboard.news.index')
			->with('news', $news);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = NewsCategory::all();
		return View::make('dashboard.news.create')
			->with('categories', $categories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$news = new News;
		$news->user_id		= Auth::user()->id;
		$news->title		= Input::get('title');
		$news->content		= Input::get('content');
		$news->category_id	= Input::get('category');
		$news->preview 		= Input::get('preview');

		if( Input::hasFile('cover') )
		{
			$file = News::upload(Input::file('cover'));
			$news->cover = $file;
		}
		
		$news->save();

		Session::flash(
			'news.store.success',
			"$news->title has been successfully created."
		);
		return Redirect::route('dashboard.news.index');
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
		$news = News::findOrFail($id);
		$categories = NewsCategory::all();

		return View::make('dashboard.news.edit')
			->with('news', $news)
			->with('categories', $categories);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$news = News::findOrFail($id);
		$news->title		= Input::get('title');
		$news->content		= Input::get('content');
		$news->category_id	= Input::get('category');
		$news->preview 		= Input::get('preview');

		if( Input::hasFile('cover') )
		{
			$file = News::upload(Input::file('cover'));
			$news->cover = $file;
		}
		
		$news->save();

		Session::flash(
			'news.update.success',
			"$news->title has been successfully updated."
		);
		return Redirect::route('dashboard.news.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$news = News::findOrFail($id);
		$news->delete();

		Session::flash(
			'news.delete.success',
			"$news->title has been successfully deleted."
		);
		
		return Response::json(['status' => true]);
	}


}
