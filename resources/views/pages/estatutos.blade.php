@extends('layout')
@section('metas')
	<title>{{config('backpack.base.project_name')}}&nbsp;|&nbsp;{!!$page->title!!}</title>
	<meta name="keywords" content="{!!$page->extras['meta_keywords']!!}">
	<meta name="description" content="{!!$page->extras['meta_description']!!}">
@endsection
@section('Estatutos')
		<section>
			<div class="container">
				<div class="row mt-5 mb-5">
					<div class="col-xs-12 col-sm-12 col-md-12 m-auto pageContent">
						<h1>{!!$page->title!!}</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 pageContent">
						{!!$page->content!!}
					</div>
				</div>
			</div>
		</section>
@endsection
