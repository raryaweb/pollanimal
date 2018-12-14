@extends('frontend.layouts.default')

@include('frontend.layouts.navigation')

@section('title')Anketa nerasta - @stop

@section('content')
	<div class="alert alert-warning">
		<h4>Survey not found!</h4>

		Sorry, the survey doesn't exist.
	</div>
@stop