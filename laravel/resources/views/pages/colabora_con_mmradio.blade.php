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
				<div class="col-xs-12 col-sm-12 col-md-8 pageContent">
					{!!$page->content!!}
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 m-auto">
					<a href="mailto:colaboradores@mmradio.es">colaboradores@mmradio.es</a>
				</div>
				{{-- @if (Session::get('status') == 'Colaboración enviada!')
					<div class="col-xs-12 col-sm-12 col-md-4 m-auto">
						Gracias por su colaboración.
					</div>
				@else
					<div class="col-xs-12 col-sm-12 col-md-4 m-auto">
						{!!Form::open(['route' => 'colaborate'])!!}
							@include('partials.form')
						{!!Form::close()!!}
					</div>
				@endif --}}
			</div>
		</div>
	</section>
@endsection
