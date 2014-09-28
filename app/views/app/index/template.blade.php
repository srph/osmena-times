@extends('app._layout.main')

@section('title') Home @stop

@section('content')
	@include('app.index._partials.news')
@stop