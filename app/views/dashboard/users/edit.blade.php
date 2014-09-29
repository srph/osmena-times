@extends('dashboard._layout.main')

@section('title') Edit {{ $user->username }} @stop

@section('content')
	<h1 style="margin-top: 0;"> Edit {{ $user->username }} </h1>
	<hr>

	@if( Session::has('users.update.error') )
		<div class="alert alert-danger">
			{{ Session::get('users.update.error') }}
		</div>
	@endif

	<form method="POST" action="{{ route('dashboard.users.update', $user->id) }}">
		<input type="hidden" name="_method" value="PUT">
		<h4>Account Details</h4>

		<div class="row">
			<div class="col-md-6 form-group">
				<label> Username </label>
				<input type="text" class="form-control" value="{{ $user->username }}" disabled>
			</div>

			<div class="col-md-6 form-group">
				<label> Password </label>
				<input type="password" class="form-control" name="password">
			</div>
		</div>

		<button type="submit" class="btn btn-success"> Update account </button>
	</form>

<hr>

	<form method="POST" action="{{ route('dashboard.users.profile.update', $user->profile->id) }}">
		<input type="hidden" name="_method" value="PUT">
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

		<button type="submit" class="btn btn-success"> Create profile </button>
	</form>
@stop