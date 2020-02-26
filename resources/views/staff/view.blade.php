@extends('layouts.parent')

@section('main')




<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('staff.photo', ['id' => $data->branch]) }}" class="btn btn-default">@lang("Back")</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />

	<h3>@lang('Name')- {!! $data->name !!}</h3>
	<h3>@lang('job')- {!! $data->job !!}</h3>
	<h3>@lang('description')- {!! $data->description !!}</h3>
	<h3>@lang('mail')- {!! $data->mail !!}</h3>
	<h3>@lang('whatsup')- {!! $data->whatsup !!}</h3>
	<h3>@lang('facebook')- {!! $data->facebook !!}</h3>

</div>
@endsection