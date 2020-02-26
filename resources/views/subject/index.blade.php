@extends('layouts.editorDash')


@section('title', '| index')



@section('main')


@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<br>

<div class="container">
	<div class="row">
	  <div class="col">
		<h2><i class="fa fa-key"></i> @lang("Subjects")</h2>
	  </div>
	  <div class="col">	
	  </div>
	</div>
	<br>

<div>
	
</div>


<table class="table table-bordered table-striped">
	<tr>
		<th>@lang("Subject Name")</th>
		<th>@lang("min-grade")</th>
		<th>@lang("max-grade")</th>


		<th>@lang("Action")</th>
	
	</tr>


	@foreach($data as $row)
	
		<tr>
			<td>{!! $row->name !!}</td>
			<td>{!! $row->min !!}</td>
			<td>{!! $row->max !!}</td>


			
			
			<td>
				
				<form action="{{ route('subject.destroy', $row->id) }}" method="post">
					
					<a href="{{ route('subject.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
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