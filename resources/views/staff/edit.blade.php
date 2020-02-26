@extends('layouts.parent')

@section('main')
<div align="right">
	<a href="{{ route('staff.photo', ['id' => $data->branch]) }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />


<h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
<br>
<br>




<form method="post" action="{{ route('staff.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("Name")</label>
		<div class="col-md-8">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg"  />
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-4 text-right">@lang("job")</label>
		<div class="col-md-8">
			<input type="text" name="job" value="{{ $data->job }}" class="form-control input-lg"  />
		</div>
	</div>




      
      <div class="form-group">
        <label class="col-md-4 text-right">@lang("select branch")</label>
        <div class="col-md-8">
			
			<select name="branch" class="browser-default custom-select" searchable="Search here..">
				<option value="11" @if($data->branch=='11') selected='selected' @endif>@lang("Administration")</option>
				
				<option value="12" @if($data->branch=='12') selected='selected' @endif>@lang("Kindergarten")</option>
				<option value="13"@if($data->branch=='13') selected='selected' @endif> @lang("Primary School")</option>
				<option value="14" @if($data->branch=='14') selected='selected' @endif>@lang("Preparatory School") </option>
				<option value="15" @if($data->branch=='15') selected='selected' @endif> @lang("High school")</option>
		

			  </select>


        </div>
	  </div>
	  


      


	<div class="form-group">
		<label class="col-md-4 text-right">@lang("description")</label>
		<div class="col-md-8">
			<input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg"  />
		
		</div>
	</div>



	

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("mail")</label>
		<div class="col-md-8">
			<input type="text" name="mail" value="{{ $data->mail }}" class="form-control input-lg"  />
		</div>
	</div>

	
	<div class="form-group">
		<label class="col-md-4 text-right">@lang("whatsup")</label>
		<div class="col-md-8">
			<input type="text" name="whatsup" value="{{ $data->whatsup }}" class="form-control input-lg"  />
		</div>
	</div>


	
	<div class="form-group">
		<label class="col-md-4 text-right">@lang("facebook")</label>
		<div class="col-md-8">
			<input type="text" name="facebook" value="{{ $data->facebook }}" class="form-control input-lg"  />
		</div>
	</div>



	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />

	<div class="form-group">
		<label class="col-md-4 text-right">@lang("Select Image")</label>
		
		<div class="col-md-8">
		
		

			<div class="file btn btn-lg btn-primary">
				
				<input type="file" name="image" />
			</div>



			
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>




@endsection




