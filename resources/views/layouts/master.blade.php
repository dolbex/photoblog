<!DOCTYPE html>
<html>
<head>

	<title>Photo Index</title>

	<link href="{{ URL::asset('css/photoblog.css') }}" type="text/css" rel="stylesheet">

	@yield('header-scripts')

	@include('devise::styles')

</head>

<body>

@yield('content')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@yield('footer-scripts')

	@include('devise::scripts')

</body>
</html>