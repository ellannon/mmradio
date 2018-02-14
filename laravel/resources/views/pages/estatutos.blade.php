@extends('layout')
@section('metas')
	<title>{{config('backpack.base.project_name')}}&nbsp;|&nbsp;{!!$page->title!!}</title>
	<meta name="keywords" content="{!!json_decode($page->extras, true)['meta_keywords']!!}">
	<meta name="description" content="{!!json_decode($page->extras, true)['meta_description']!!}">
@endsection
@section('Estatutos')
@endsection
