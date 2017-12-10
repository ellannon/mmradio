<!DOCTYPE html>
<html lang='en' dir='ltr' class='sid-plesk'>
   <head>
      <title>MMRadio</title>
      <meta name='copyright' content='Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.'>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
      <meta http-equiv='Cache-Control' content='no-cache'>
      <link rel='shortcut icon' href="{{asset('images/favicon.ico')}}">
      <link rel='stylesheet' href="{{asset('css/bootstrap.min.css')}}">
      <link rel='stylesheet' href="{{asset('css/reboot.min.css')}}">
      <link rel='stylesheet' href="{{asset('css/bootstrap-grid.min.css')}}">
      <link rel='stylesheet' href="{{asset('css/style.css')}}">
   </head>
   <body>
	   <div class="content d-flex flex-column justify-content-between">
		   @include('partials.header')

		   @include('partials.audio_player')

		   @yield('content')

		   @include('partials.footer')
	   </div>
	  @include('partials.js')
   </body>
</html>
