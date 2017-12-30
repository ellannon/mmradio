@extends('layout')
@section('metas')
	<title>{{config('backpack.base.project_name')}}&nbsp;|&nbsp;{!!$page->title!!}</title>
	<meta name="keywords" content="{!!json_decode($page->extras, true)['meta_keywords']!!}">
	<meta name="description" content="{!!json_decode($page->extras, true)['meta_description']!!}">
@endsection
@section('content')
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
				<div class="col-xs-10 col-sm-10 col-md-10 m-auto pageContent">
					{!!$page->content!!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 m-auto"></div>
			</div>
		</div>
	</section>
@endsection
