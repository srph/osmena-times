@extends('dashboard._layout.main')

@section('title') Manage news @stop

@section('content')
	<h1 style="margin-top: 0;"> Manage News </h1>
	<hr>

	@if( Session::has('news.store.success') )
		<div class="alert alert-success">
			{{ Session::get('news.store.success') }}
		</div>
	@endif

	@if( Session::has('news.update.success') )
		<div class="alert alert-success">
			{{ Session::get('news.update.success') }}
		</div>
	@endif

	@if( Session::has('news.delete.success') )
		<div class="alert alert-success">
			{{ Session::get('news.delete.success') }}
		</div>
	@endif

	<table class="table table-striped">
		<thead>
			<tr>
				<th> # </th>
				<th> Actions </th>
				<th> Author </th>
				<th> Title </th>
				<th> Date Published </th>
			</tr>
		</thead>

		<tbody>
			@foreach($news as $article)
				<tr>
					<td> {{ $article->id }} </td>
					<td>
						<a href="{{ route('dashboard.news.edit', $article->id) }}"> <i class="glyphicon glyphicon-pencil"></i> </a>
						<a href="#"> <i class="glyphicon glyphicon-trash"></i> </a>
					</td>
					<td> {{ $article->user->username }} </td>
					<td> {{ $article->title }} </td>
					<td> {{ $article->created_at }} </td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ $news->links() }}
@stop