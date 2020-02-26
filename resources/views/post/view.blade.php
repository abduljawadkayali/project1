@extends('layouts.parent')

@section('title', '| View Post')

@section('main')



<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('post.text', ['id' => $dataText->page]) }}" class="btn btn-default">@lang("Back")</a>
	</div>
	<br />
	<h3>@lang('title')- {!! $dataText->title !!}</h3>

	<h3>@lang('body')- {!! $dataText->body !!}</h3>

	
</div>



@endsection