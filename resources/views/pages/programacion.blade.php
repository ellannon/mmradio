@extends('layout')
@section('metas')
	<title>{{config('backpack.base.project_name')}}&nbsp;|&nbsp;{!!$page->title!!}</title>
	<meta name="keywords" content="{!!$page->extras['meta_keywords']!!}">
	<meta name="description" content="{!!$page->extras['meta_description']!!}">
@endsection
@section('content')
	<section>
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="col-xs-12 col-sm-12 col-md-12 m-auto pageContent">
					<h1>{!!$page->title!!}</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 m-auto pageContent">
					<div class="row">
						@foreach ($dias as $dia => $programa)
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg">
								<div class="text-uppercase daysHeader border border-top-0 border-left-0 border-right-0 text-center p-2 mt-3 mb-3"><span>{!!$dia!!}</span></div>
								@foreach ($programa as $value)
									<div class="text-center p-2 grid-item"><span>{!!$value!!}</span></div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="row mt-5 mb-5">
				<div class="col-xs-12 col-sm-12 col-md-12 m-auto pageContent">
					{!!$page->content!!}
				</div>
			</div>
		</div>
	</section>
@endsection
