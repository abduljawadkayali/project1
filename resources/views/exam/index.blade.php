@extends('layouts.editorDash')


@section('title', '| Exam index')



@section('main')


@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<br>
<br>
<div class="container">
	<div class="row">
	  <div class="col">
		<h2><i class="fa fa-key"></i> @lang("Exams")</h2>
		<hr>
	  </div>
	  <div class="col">	
	  </div>
	</div>

<div>
	
</div>


<table class="table table-bordered table-striped">
	<tr>
		<th>@lang("Exam Name")</th>
		<th>@lang("Exam Percent")</th>



		<th>@lang("Action")</th>
	
	</tr>


	@foreach($data as $row)
	
		<tr>
			<td>{!! $row->name !!}</td>
			<td>{!! $row->percent !!}</td>



			
			
			<td>
				
				<form action="{{ route('exam.destroy', $row->id) }}" method="post">
					
					<a href="{{ route('exam.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach
	
</table>
{!! $data->links() !!}



@endsection