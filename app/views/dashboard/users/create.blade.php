@extends('dashboard._layout.main')

@section('title') Create new user @stop

@section('content')
	<h1 style="margin-top: 0;"> Create new user </h1>
	<hr>	

	@if( Session::has('users.store.error') )
		<div class="alert alert-danger">
			{{ Session::get('users.store.error') }}
		</div>
	@endif

	<form method="POST" action="{{ route('dashboard.users.store') }}">
		<h4>Account Details</h4>

		<div class="row">
			<div class="col-md-6 form-group">
				<label> Username </label>
				<input type="text" class="form-control" name="username">
			</div>

			<div class="col-md-6 form-group">
				<label> Password </label>
				<input type="password" class="form-control" name="password">
			</div>
		</div>

		<hr>

		<h4>Profile</h4>

		<div class="row">
			<div class="col-md-6 form-group">
				<label> Name </label>
				<input type="text" class="form-control" name="name">
			</div>

			<div class="col-md-6 form-group">
				<label> Photo </label>
				<input type="file" class="form-control" name="photo">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 form-group">
				<label> About Me </label>
				<textarea name="about_me" rows="5" class="form-control"></textarea>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label> Facebook </label>
					<input type="text" class="form-control" name="facebook">
				</div>

				<div class="form-group">
					<label> Twitter </label>
					<input type="text" class="form-control" name="twitter">
				</div>
			</div>
		</div>

		<hr>

		<button type="submit" class="btn btn-success"> Create user </button>
	</form>
@stop