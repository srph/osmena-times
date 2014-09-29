@extends('app._layout.main')

@section('title') {{ $user->username }}'s profile @stop

@section('content')
	<div class="row">
		<section class="col-md-3">
			@include('app.users._partials.sidebar')
		</section>

		<section class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="media">
						<a class="pull-left">
							<img class="media-object" src="{{ asset($user->profile->dpLink) }}" width="200px">
						</a>
						<div class="media-body">
							<h4 class="media-heading">{{ $user->profile->name }} <small>(<strong>@</strong>{{ $user->username }})</small></h4>
							<h5> <small> <i class="glyphicon glyphicon-time"></i> {{ $user->created_at->diffForHumans() }} </small> </h5>
							<p>
								{{ $user->profile->about_me }}
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@stop