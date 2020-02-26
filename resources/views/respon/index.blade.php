@extends('layouts.editorDash')


@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
 
@endsection





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

		<h1>
				
			<i class="fa fa-key" aria-hidden="true"></i>
			@lang("Teacher responsity") 
			</h1>
	  </div>
	  <div class="col">	
	  </div>
	</div>
	<br>
	<br>
<div>
	
</div>

<table class="table datatable table-bordered table-striped">
    <thead>
	<tr>
		<th>@lang("Year")</th>
		<th>@lang("Semister")</th>
        <th>@lang("Teacher Name")</th>
        <th>@lang("Teacher Class")</th>
      
        <th>@lang("Teacher Branch")</th>
        <th>@lang("Teacher Subject")</th>	


		<th>@lang("Action")</th>
	
	</tr>
</thead>
    <tbody>
    
    
	@foreach($respon as $row)
	
	<tr>
		<td>{{ $row->year->name }}</td>
		<td>{{ $row->semister->name }}</td>
       <td>{{ $row->teacher->name }}</td>
	   <td>{{ $row->group->name }}</td>
	   <td>{{ $row->branch->name }}</td>
	   <td>{{ $row->subject->name }}</td>
			
			<td>
				
				<form action="{{ route('respon.destroy', $row->id) }}" method="post">
					
					<a href="{{ route('respon.edit', $row->id) }}" class="btn btn-warning">@lang("Edit")</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">@lang("Delete")</button>
				</form>
			</td>
		</tr>




    @endforeach
</tbody>
	
</table>
<script>
$(document).ready( function () {
    $('.datatable').DataTable();
	$('div.dataTables_filter label input').addClass('form-control');
} );
</script>
 
@endsection