@extends('app._layout.main')

@section('title') {{ $main->title }} @stop

@section('content')
	<div class="row">
		<section class="col-md-3">
			@include('app.news._partials.sidebar')
		</section>

		<section class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<img src="{{ $main->coverLink }}" width="100%">
					<h3 style="margin-bottom: -10px;"> {{ $main->title }} </h3>

					<div class="clearfix">
						<h5 class="pull-left"> <small> <i class="glyphicon glyphicon-time"></i> {{ $main->created_at->diffForHumans() }} <br /> <i class="glyphicon glyphicon-eye-open"></i> {{ $views }} views </small> </h5>
						<h5 class="pull-right"> <small> <i class="glyphicon glyphicon-user"></i> <a href="{{ route('profile', $main->user->username) }}"> {{ '@' . $main->user->username }} </a> </small> </h5>
					</div>

					<hr>
					<p>
						{{ $main->content }}
					</p>
				</div>
			</div>
		</section>
	</div>
@stop