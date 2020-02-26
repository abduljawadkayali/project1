@extends('layouts.editorDash')


@section('title', '| Add Photo')



@section('main')


<div align="right">
	<a href="{{ route('subject.index') }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />


<h1><i class="fa fa-edit"> </i>@lang("Edit Subject") {{ $data->name }}</h1>
 <hr>




<form method="post" action="{{ route('subject.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("Subject Name")</label>
		<div class="col-md-8">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg"  />
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-4 text-right">@lang("min-grade")</label>
		<div class="col-md-8">
			<input type="number" name="min" value="{{ $data->min }}" class="form-control input-lg"  />
		</div>
    </div>
    
    <div class="form-group">
		<label class="col-md-4 text-right">@lang("max-grade")</label>
		<div class="col-md-8">
			<input type="number" name="max" value="{{ $data->max }}" class="form-control input-lg"  />
		</div>
	</div>


	  



		
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>






@endsection