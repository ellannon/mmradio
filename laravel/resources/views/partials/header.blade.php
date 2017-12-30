<header class="container-fluid navbar">
   <div class="row w-100">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
			{{-- <div id="streamer">
		 	   <audio src="http://redradioypc.com:8028/stream" autoplay controls="true"></audio>
		    </div> --}}
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<div class="text-center">
					<a class="" href="{{url('')}}">
						<img width="80" class="align-self-center img-fluid" src="{{asset('images/logo.png')}}" alt="">
					</a>
				</div>
				<ul class="navbar-nav w-100 justify-content-end text-left">
					@foreach ($pages as $slug)
						<li class="nav-item">
							@if ($slug == 'apps-de-descarga')
								@if ($mobile)
									<a class="nav-link" href="{{$slug}}"> {!!trans('home.menu-'.$slug)!!} </a>
								@endif
							@else
								<a class="nav-link" href="{{$slug}}"> {!!trans('home.menu-'.$slug)!!} </a>
							@endif
						</li>
					@endforeach
				</ul>
            </div>
         </nav>
      </div>
   </div>
</header>
