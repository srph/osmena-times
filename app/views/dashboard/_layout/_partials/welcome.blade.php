<div class="media">
	<a class="pull-left" href="#">
		<img class="media-object" src="{{ asset(Auth::user()->profile->dpLink) }}" width="64px">
	</a>
	<div class="media-body">
		<h4 class="media-heading">{{ Auth::user()->username }}</h4>
		<a href="{{ route('dashboard.users.edit', Auth::user()->id) }}">
			<i class="glyphicon glyphicon-pencil"></i>
			Edit Profile </a>
		<br />
		<a href="{{ route('profile', Auth::user()->username) }}">
			<i class="glyphicon glyphicon-user"></i>
			View Profile
		</a>
	</div>
</div>