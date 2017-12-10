<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js' integrity='sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh' crossorigin='anonymous'></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function() { startplayer(); }, false);
	var player;

	function startplayer()
	{
		player = document.getElementById('music_player');
		player.controls = false;
	}
	function play_aud(){
		player.play();
	}
	function pause_aud(){
		player.pause();
	}
	function stop_aud(){
		player.pause();
		player.currentTime = 0;
	}
	function change_vol(){
		player.volume=document.getElementById("change_vol").value;
	}
	function change_vol2(){
		player.volume=document.getElementById("change_vol2").value;
	}
	$(document).ready(function(){
		play_aud();

		@if ($mobile)
			$('.centerButton.active').show();
		@else
			$('.playButton, .centerButton').mouseenter(function(){
				$('.centerButton.active').show();
			});
			$('.playButton, .centerButton').mouseleave(function(){
				$('.centerButton').hide();
			});
		@endif

		$('.centerButton').click(function(){
			$('.centerButton').toggleClass('active');
			$('.centerButton').hide();
			$('.centerButton.active').show();
		});
	});
</script>
