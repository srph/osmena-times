<section class="list-group">
	<a href="{{ route('dashboard') }}" class="list-group-item" {{ activeInRoute('dashboard') }}> Home </a>
</section>

<section class="list-group">
	<a href="{{ route('dashboard.news.index') }}" class="list-group-item" {{ activeInRoute('dashboard/news') }}> Manage News </a>
	<a href="{{ route('dashboard.news.create') }}" class="list-group-item" {{ activeInRoute('dashboard/news') }}> Publish New Article </a>
</section>

<section class="list-group">
	<a href="{{ route('dashboard.users.index') }}" class="list-group-item" {{ activeInRoute('dashboard/users') }}> Manage Authors </a>
	<a href="{{ route('dashboard.users.create') }}" class="list-group-item" {{ activeInRoute('dashboard/users') }}> Register New Author </a>
</section>

<section class="list-group">
	<a href="{{ route('dashboard.logout') }}" class="list-group-item"> Logout </a>
</section>