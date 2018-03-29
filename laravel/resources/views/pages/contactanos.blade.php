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
					{!!Form::open(['route' => 'contact'])!!}

					<div class="form-group">
						{{Form::label ('Nombre:')}}
						{{Form::input('text','name',null,array('class'=>'form-control'))}}
					</div>

					<div class="form-group">
					{{Form::label ('Email:')}}
					{{Form::input('email','email',null,array('class'=>'form-control'))}}
					</div>

					<div class="form-group">
					{{Form::label ('Asunto:')}}
					{{Form::input('text','subject',null,array('class'=>'form-control'))}}
					</div>

					<div class="form-group">
					{{Form::label ('Mensaje:')}}
					{{Form::textarea('msg',null,array('class'=>'form-control'))}}
					</div>
					Formulario no disponible. Lamentamos las molestias.
					{{-- <button type="submit" class="btn btn-primary">Enviar</button> --}}
				</div>

				{{-- @if (Session::get('status') == 'Contacto enviado!')
					<div class="col-xs-12 col-sm-12 col-md-4 m-auto">
						Gracias por su mensaje.
					</div>
				@else
					{{-- <div class="col-xs-12 col-sm-12 col-md-4 m-auto"> --}}

							{{-- @include('partials.form') --}}
						{!!Form::close()!!}
					{{-- </div>
				@endif --}}
			</div>
		</div>
	</section>
@endsection
