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
    <th>@lang("title")</th>

		<th>@lang("Action")</th>
	</tr>


	@foreach($dataText as $row)
	
		<tr>
			<td>{!! $row->title !!}</td>
			
			
			<td>
				
				<form action="{{ route('posts.destroy', $row->id) }}" method="post">
					<a href="{{ route('posts.show', $row->id) }}" class="btn btn-primary">@lang("Show")</a>
					<a href="{{ route('posts.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




	@endforeach
	
</table>
{!! $dataText->links() !!}

    
@endsection