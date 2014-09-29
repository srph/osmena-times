@extends('dashboard._layout.main')

@section('title') Publish new article @stop

@section('content')
	<h1 style="margin-top: 0;"> Publish new article </h1>
	<hr>

	@if( Session::has('news.store.error') )
		<div class="alert alert-danger">
			{{ Session::get('news.store.error') }}
		</div>
	@endif
@stop