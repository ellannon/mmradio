<div id="wrapper">
	<div id='player' class="d-flex justify-content-around @if (Route::currentRouteName() != 'home'){{'visible'}}@else{{'invisible'}}@endif">
		<audio id="music_player">
			<source src="http://redradioypc.com:8028/stream"/>
		</audio>
		<input type="image" src="{{asset('images/play.png')}}" onclick="play_aud()" id="play_button">
		<input type="image" src="{{asset('images/pause.png')}}" onclick="pause_aud()" id="play_button">
		<img src="{{asset('images/volume.png')}}" id="vol_img">
		<input type="range" id="change_vol" onchange="change_vol()" step="0.05" min="0" max="1" value="1">
	</div>
</div>
