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

	<form action="{{ route('dashboard.news.store') }}" method="POST">
		<div class="row">
			<div class="col-md-6 form-group">
				<label> Title </label>
				<input type="text" class="form-control" name="title">
			</div>

			<div class="col-md-6 form-group">
				<label> Cover </label>
				<input type="file" class="form-control" name="cover">
			</div>
		</div>

		<div class="form-group">
			<label> Content </label>
			<textarea class="form-control" name="content"></textarea>
		</div>

		<button type="submit" class="btn btn-submit">
			<i class="glyphicon glyphicon-pencil"></i>
			Publish Article
		</button>
	</form>
@stop