<nav class="navbar navbar-inverse" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="#">Osmena Times</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li {{ activeInRoute('/') }}><a href="/">Home</a></li>
			<li {{ activeInRoute('about') }}><a href="/about/">About</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>