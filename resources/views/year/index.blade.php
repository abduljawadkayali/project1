@extends('layouts.editorDash')


@section('title', '| Year index')



@section('main')


@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

<div class="container">
	<div class="row">
	  <div class="col">
		
	  </div>
	  <div class="col">	
	  </div>
	</div>
	<h2><i class="fa fa-key"></i> @lang("year")</h2>
	<hr>
<div>
	
</div>


<table class="table table-bordered table-striped">
	<tr>
		<th>@lang("year")</th>



		<th>@lang("Action")</th>
	
	</tr>


	@foreach($data as $row)
	
		<tr>
			<td>{!! $row->name !!}</td>



			
			
			<td>
				
				<form action="{{ route('year.destroy', $row->id) }}" method="post">
					
					<a href="{{ route('year.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
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