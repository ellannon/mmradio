<!DOCTYPE html>
<html lang='en' dir='ltr' class='sid-plesk'>
	<head>
	   @yield('metas')
	  <meta charset='utf-8'>
	  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
	  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
	  <meta http-equiv='Cache-Control' content='no-cache'>
	  <link rel='shortcut icon' href="{{asset('images/favicon.png')}}">
	  <link rel='stylesheet' href="{{asset('css/bootstrap.min.css')}}">
	  <link rel='stylesheet' href="{{asset('css/reboot.min.css')}}">
	  <link rel='stylesheet' href="{{asset('css/bootstrap-grid.min.css')}}">
	  <link rel='stylesheet' href="{{asset('css/style.css')}}">
	  <link rel='stylesheet' href="{{asset('css/addtohomescreen.css')}}">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body class="{{$page->slug}}">
	   <div class="content d-flex flex-column justify-content-between">
		   @include('partials.header')
		   <div class="container mb-5"></div>
		   @yield('content')

		   @include('partials.footer')
	   </div>
	  @include('partials.js')
	</body>
</html>
