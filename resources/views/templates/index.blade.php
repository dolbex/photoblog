@extends('layouts.master')

@section('content')
<div id="photo-header" style="background-image:url('img/fpo/atlanta.jpg');">

	<div class="content">
		<p>Bacon ipsum dolor amet jowl pork chop ham hock turducken cow ham, andouille rump sausage venison. Brisket tenderloin pig pork chop meatball pork loin.</p>
	</div>

</div>

<div class="wide-content" id="photo-index">

	@foreach($photos as $photo)
	<div onclick="location.href='#'">
		<img src="{{ URL::asset('img/blog/thumbs/' . $photo->image_url) }}"><br>
		<h3 data-devise="$photo->name, text, Photo Name">{{ $photo->name }}</h3>
		<h4>{{ $photo->city }}</h4>
		<h5>{{ ($photo->date_taken) ? date("F jS, Y", strtotime($photo->date_taken)) : 'Unknown' }}</h5>
	</div>
	@endforeach
</div>

@stop

@section('footer-scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/index.js"></script>

@stop