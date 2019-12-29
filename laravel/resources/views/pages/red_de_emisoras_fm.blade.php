@extends('layout')
@section('metas')
	<title>{{config('backpack.base.project_name')}}&nbsp;|&nbsp;{!!$page->title!!}</title>
	<meta name="keywords" content="{!!json_decode($page->extras, true)['meta_keywords']!!}">
	<meta name="description" content="{!!json_decode($page->extras, true)['meta_description']!!}">
@endsection
@section('content')
	<section>
		<div class="container">
			<div class="row mb-5">
				<div class="col-xs-12 col-sm-12 col-md-12 m-auto pageContent">
					<h1>{!!$page->title!!}</h1>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-12 col-md-12 m-auto pageContent">
					{!!$page->content!!}
				</div>
			</div>
			<div class="row mt-3">
				@foreach ($emisoras as $emisora)
					<div class="col-xs-12 col-sm-6 col-md-4 pageContent">
						<div class="text-uppercase border border-top-0 border-left-0 border-right-0 text-center p-2">
							<span>Anfitrión/Zona/País/Frecuencia</span>
						</div>
						@foreach ($emisora as $value)
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg">
									<div class="text-center p-2">
										<span>{!!$value!!}</span>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection
