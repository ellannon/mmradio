@extends('layout')
@section('metas')
	<title>MMRadio</title>
	<meta name="keywords" content="musulmanes radio palma de mallorca">
	<meta name="description" content="MM Radio.es musulmanes radio palma de mallorca emisora de radio en habla hispana">
@endsection
@section('content')
   <section>
      <div class="container-fluid">
		  <div class="row">
			  <div class="col-xs-12 col-sm-12 col-md-12 m-auto mmradioLetters">
				  {!!$page->content!!}
			  </div>
		  </div>
		  <div class="row mt-5">
			  <div class="col-xs-12 col-sm-12 col-md-12 mx-auto media justify-content-center">
				  <div class="playButton d-flex align-items-center justify-content-center">
					  <img src="{{asset('images/logo.png')}}" class="playButton img-fluid"/>
					  <img src="{{asset('images/play.png')}}" onclick="play_aud()" class="centerButton img-fluid"/>
					  <img src="{{asset('images/pause.png')}}" onclick="pause_aud()" class="centerButton active img-fluid"/>
					  <div class="volumeButton d-flex align-items-end justify-content-around">
						  <img src="{{asset('images/volume.png')}}" id="vol_img">
						  <input type="range" id="change_vol2" onchange="change_vol2()" step="0.05" min="0" max="1" value="1">
					  </div>
				  </div>
			  </div>
		  </div>
      </div>
   </section>
@endsection
