<!DOCTYPE html>
<html>
<head>
	<title>Osmena Times Dashboard - Login</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/stylesheet.css">
</head>
<body>
	<section class="login-outer">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Login to Dashboard</strong>
			</div>
			<div class="panel-body">
				@if( Session::has('login.error') )
					<div class="alert alert-warning">
						{{ Session::get('login.error') }}
					</div>
				@endif

				<form action="">
					<div class="form-group">
						<label> Username </label>
						<input type="text" class="form-control" placeholder="Username.." name="username">
					</div>

					<div class="form-group">
						<label> Password </label>
						<input type="password" class="form-control" placeholder="********" name="password">
					</div>
					
					<div class="clearfix">
						<button type="submit" class="btn btn-success pull-left">Login</button>
						<a href="/" class="btn btn-warning pull-right">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
</body>
</html>