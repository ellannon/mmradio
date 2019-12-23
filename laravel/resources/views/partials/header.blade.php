<header class="container-fluid navbar">
	<div class="row w-100">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="text-center" style="{{($page->slug == 'home') ? 'opacity:0;' : null}}">
						<a class="" href="{{url('')}}">
							<img width="80" class="align-self-center img-fluid" src="{{asset('images/logo.png')}}" alt="">
						</a>
					</div>
					<ul class="navbar-nav w-100 justify-content-end text-left">
						@foreach ($menus as $menu)
							<li class="nav-item">
								@if ($menu->slug == 'apps-de-descarga')
									@if ($mobile)
										<a class="nav-link" href="{{$menu->slug}}"> {!!$menu->title!!} </a>
									@endif
								@else
									<a class="nav-link" href="{{$menu->slug}}"> {!!$menu->title!!} </a>
								@endif
							</li>
						@endforeach
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div style="{{($page->slug == 'home') ? 'display:none;' : null}}">
		@include('partials.audio_player')
	</div>
</header>
