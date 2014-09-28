<!DOCTYPE html>
<html>
<head>
	<title>Osmena Times - @yield('title')</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/stylesheet.css">
</head>
<body>
	<div class="container">
		@include('app._layout.partials.nav')

		@yield('content')

		@include('app._layout.partials.footer')
	</div>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
</body>
</html>