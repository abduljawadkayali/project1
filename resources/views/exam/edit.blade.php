@extends('layouts.editorDash')


@section('title', '| Edit Exam')



@section('main')


<div align="right">
	<a href="{{ route('exam.index') }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />


<h1><i class="fa fa-edit"> </i>@lang("Edit Exam"){{ $data->name }}</h1>
<hr>




<form method="post" action="{{ route('exam.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("Exam Name")</label>
		<div class="col-md-8">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg"  />
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("Exam Percent")</label>
		<div class="col-md-8">
			<input type="integer" name="percent" value="{{ $data->percent }}" class="form-control input-lg"  />
		</div>
	</div>

		
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>






@endsection