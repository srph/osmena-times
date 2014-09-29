<!DOCTYPE html>
<html>
<head>
	<title>Osmena Times Dashboard - @yield('title')</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/stylesheet.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<section class="col-md-3">
				@include('dashboard._layout._partials.sidebar')
			</section>

			<section class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body">
						@yield('content')
					</div>
				</div>
			</section>
		</div>
	</div>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
</body>
</html>