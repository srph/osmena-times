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

	<form action="{{ route('dashboard.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PUT">

		<div class="row">
			<div class="col-md-6 form-group">
				<label> Title </label>
				<input type="text" class="form-control" name="title" value="{{ $news->title }}">
			</div>

			<div class="col-md-6 form-group">
				<label> Category </label>
				<select name="category" class="form-control" value="{{ $news->category->id }}">
					@foreach($categories as $category)
						<option value="{{ $category->id }}"> {{ $category->name }} </option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 form-group">
				<label> Preview </label>
				<input type="text" class="form-control" name="preview" value="{{ $news->preview }}">
			</div>

			<div class="col-md-6 form-group">
				<label> Cover </label>
				<input type="file" class="form-control" name="cover">
			</div>
		</div>

		<div class="form-group">
			<label> Content </label>
			<textarea class="form-control" name="content">{{ $news->content }}</textarea>
		</div>

		<button type="submit" class="btn btn-success">
			<i class="glyphicon glyphicon-pencil"></i>
			Publish Article Edition
		</button>
	</form>
@stop