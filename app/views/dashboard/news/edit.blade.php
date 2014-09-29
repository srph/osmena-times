@extends('dashboard._layout.main')

@section('title') Edit {{ $news->title }} @stop

@section('content')
	<h1 style="margin-top: 0;"> Edit {{ $news->title }} </h1>
	<hr>

	@if( Session::has('news.update.error') )
		<div class="alert alert-danger">
			{{ Session::get('news.update.error') }}
		</div>
	@endif
@stop