@extends('dashboard._layout.main')

@section('title') Manage users @stop

@section('content')
	<h1 style="margin-top: 0;"> Manage Users </h1>
	<hr>

	@if( Session::has('users.store.success') )
		<div class="alert alert-success">
			{{ Session::get('users.store.success') }}
		</div>
	@endif

	@if( Session::has('users.update.success') )
		<div class="alert alert-success">
			{{ Session::get('users.update.success') }}
		</div>
	@endif

	@if( Session::has('users.delete.success') )
		<div class="alert alert-success">
			{{ Session::get('users.delete.success') }}
		</div>
	@endif

	@if( Session::has('users.profile.update.success') )
		<div class="alert alert-success">
			{{ Session::get('users.profile.update.success') }}
		</div>
	@endif
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th> # </th>
				<th> Actions </th>
				<th> Username </th>
			</tr>
		</thead>

		<tbody>
			@foreach($users as $user)
				<tr>
					<td> {{ $user->id }} </td>
					<td>
						<a href="{{ route('dashboard.users.edit', $user->id) }}"> <i class="glyphicon glyphicon-pencil"></i> </a>
						<a href="#" class="js-delete" data-id="{{ $user->id }}"> <i class="glyphicon glyphicon-trash"></i> </a>
					</td>
					<td> {{ $user->username }} </td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ $users->links() }}
@stop

@section('scripts')
	<script>
		(function ($, undefined) {
			$('.js-delete').on('click', function(e) {
				e.preventDefault();
				var id = $(this).data('id');
				var url = '/dashboard/users/' + id;

				$.ajax({
					url: url,
					type: 'DELETE',
					success: function(response) {
						if ( response.status ) {
							window.location.reload();
						} else {
							alert('Unable to process your request.');
						}
					}
				})
			});
		})(jQuery);
	</script>
@stop