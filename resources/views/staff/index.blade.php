@extends('layouts.parent')

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
		
	  </div>
	  <div class="col">	
	  </div>
	</div>
	<br>
	<br>
<div>
	
</div>


<table class="table table-bordered table-striped">
	<tr>
		<th>@lang("Name")</th>
		<th>@lang("job")</th>
		<th>@lang("description")</th>

		<th>@lang("mail")</th>
		<th>@lang("whatsup")</th>
		<th>@lang("facebook")</th>

		<th>@lang("Image")</th>
		<th>@lang("Action")</th>
	
	</tr>


	@foreach($data as $row)
	
		<tr>
			<td>{!! $row->name !!}</td>
			<td>{!! $row->job !!}</td>
			<td>{!! $row->description !!}</td>
			<td>{!! $row->mail !!}</td>
			<td>{!! $row->whatsup !!}</td>
			<td>{!! $row->facebook !!}</td>

			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="150" /></td>
			
			<td>
				
				<form action="{{ route('staff.destroy', $row->id) }}" method="post">
					<a href="{{ route('staff.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					<a href="{{ route('staff.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
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