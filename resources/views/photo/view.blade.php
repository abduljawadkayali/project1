@extends('layouts.parent')

@section('main')




<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.photo', ['id' => $data->web_page]) }}" class="btn btn-default">@lang("Back")</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />

	<h3>@lang('description')- {!! $data->description !!}</h3>

	<h3>@lang('title')- {!! $data->title !!}</h3>
</div>
@endsection