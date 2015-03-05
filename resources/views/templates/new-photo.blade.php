@extends('layouts.master')

@section('content')

<div class="content">

	<h1 class="mt">Create new Photo Entry</h1>

	<p class="mt">Bacon ipsum dolor amet jowl pork chop ham hock turducken cow ham, andouille rump sausage venison. Brisket tenderloin pig pork chop meatball pork loin.</p>

	<div class="form-block">
		{!! Form::open(['url' => URL::route('handle-upload'), 'method'=>'POST', 'files' => true]) !!}

			<div class="form-group">
				<label>New Image</label>
				{!! Form::input('file', 'new_image') !!}
			</div>

			<div class="form-group">
				<label>name</label>
				{!! Form::input('text', 'name') !!}
			</div>

			<div class="form-group">
				<label>description</label>
				{!! Form::textarea('description') !!}
			</div>

			{!! Form::submit('Save') !!}

		{!! Form::close() !!}
	</div>

</div>

@stop

@section('footer-scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/index.js"></script>

@stop