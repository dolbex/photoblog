@extends('layouts.master')

@section('content')
<div id="photo-header" style="background-image:url('img/fpo/atlanta.jpg');">

	@if(DeviseUser::checkConditions('canAccessAdmin'))

	{!! Form::open(['url' => URL::route('handle-upload'), 'method'=>'POST', 'files' => true]) !!}
		{!! Form::input('file', 'new_image') !!}
		{!! Form::submit('Save') !!}
	{!! Form::close() !!}

	@endif

	<div class="content">
		<p>Bacon ipsum dolor amet jowl pork chop ham hock turducken cow ham, andouille rump sausage venison. Brisket tenderloin pig pork chop meatball pork loin.</p>
	</div>

</div>

<div class="wide-content" id="photo-index">

	<div onclick="location.href='#'">
		<img src="img/fpo/atlanta.jpg"><br>
		<h3>Atlanta</h3>
		<h5>December 28th, 2014</h5>
	</div>

	<div onclick="location.href='#'">
		<img src="img/fpo/atlanta.jpg"><br>
		<h3>Atlanta</h3>
		<h5>December 28th, 2014</h5>
	</div>

	<div onclick="location.href='#'">
		<img src="img/fpo/atlanta.jpg"><br>
		<h3>Atlanta</h3>
		<h5>December 28th, 2014</h5>
	</div>

	<div onclick="location.href='#'">
		<img src="img/fpo/atlanta.jpg"><br>
		<h3>Atlanta</h3>
		<h5>December 28th, 2014</h5>
	</div>

	<div onclick="location.href='#'">
		<img src="img/fpo/atlanta.jpg"><br>
		<h3>Atlanta</h3>
		<h5>December 28th, 2014</h5>
	</div>

	<div onclick="location.href='#'">
		<img src="img/fpo/atlanta.jpg"><br>
		<h3>Atlanta</h3>
		<h5>December 28th, 2014</h5>
	</div>
</div>

@stop

@section('footer-scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/index.js"></script>

@stop