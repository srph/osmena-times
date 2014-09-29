<section class="list-group">
	<a href="{{ route('dashboard') }}" class="list-group-item" {{ activeInRoute('dashboard') }}> Home </a>
	<a href="{{ route('dashboard.logout') }}" class="list-group-item"> Logout </a>
</section>

<section class="list-group">
	<a href="{{ route('dashboard.news.index') }}" class="list-group-item" {{ activeInRoute('dashboard/news') }}> Manage News </a>
	<a href="{{ route('dashboard.users.index') }}" class="list-group-item" {{ activeInRoute('dashboard/user') }}> Manage Users </a>
</section>