@extends('layouts.editorDash')


@section('title', '| Edit Branch')



@section('main')


<div align="right">
	<a href="{{ route('branch.index') }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />


<h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
<br>
<br>




<form method="post" action="{{ route('branch.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("Branch Name")</label>
		<div class="col-md-8">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg"  />
		</div>
	</div>


		
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>






@endsection