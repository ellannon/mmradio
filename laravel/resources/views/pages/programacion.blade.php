@extends('layout')
@section('metas')
	<title>{{config('backpack.base.project_name')}}&nbsp;|&nbsp;{!!$page->title!!}</title>
	<meta name="keywords" content="{!!json_decode($page->extras, true)['meta_keywords']!!}">
	<meta name="description" content="{!!json_decode($page->extras, true)['meta_description']!!}">
@endsection
@section('content')
	<section>
		<div class="container-fluid">
			<div class="row mb-5">
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
				<div class="col-xs-10 col-sm-10 col-md-10 m-auto pageContent">
					<h1>{!!$page->title!!}</h1>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
			</div>
			<div class="row mt-5">
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
				<div class="col-xs-10 col-sm-10 col-md-10 m-auto pageContent">
					{!!$page->content!!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
			</div>
			<div class="row mt-5">
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
				<div class="col-xs-10 col-sm-10 col-md-10 m-auto pageContent">
					<div class="row">
						@foreach ($dias as $dia => $programa)
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg">
								<div class="text-uppercase border border-top-0 border-left-0 border-right-0 text-center p-2 mt-3 mb-3"><span>{!!$dia!!}</span></div>
								@foreach ($programa as $value)
									<div class="text-center p-2"><span>{!!$value!!}</span></div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
			</div>
		</div>
	</section>
@endsection
