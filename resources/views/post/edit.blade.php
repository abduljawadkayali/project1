@extends('layouts.parent')

@section('main')
<div align="right">
	<a href="{{ route('post.text', ['id' => $dataText->page]) }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />


<h1><i class="fa fa-edit"> </i>@lang("Edit")</h1>
<br>
<br>




<form method="post" action="{{ route('posts.update', $dataText->id) }}" >

	@csrf
	@method('PATCH')

      
      <div class="form-group">
        <label class="col-md-4 text-right">@lang("select page")</label>
        <div class="col-md-8">
			
			<select name="page" class="browser-default custom-select" searchable="Search here..">
				<option value="0" @if($dataText->page=='0') selected='selected' @endif>@lang("post")</option>
				<option value="1" @if($dataText->page=='1') selected='selected' @endif>@lang("home")</option>
				
				<option value="2" @if($dataText->page=='2') selected='selected' @endif>@lang("Kindergarten")</option>
				<option value="3"@if($dataText->page=='3') selected='selected' @endif> @lang("Primary School")</option>
				<option value="4" @if($dataText->page=='4') selected='selected' @endif>@lang("Preparatory School") </option>
				<option value="5" @if($dataText->page=='5') selected='selected' @endif> @lang("High school")</option>
				<option value="6" @if($dataText->page=='6') selected='selected' @endif>@lang("Magazine")</option>
				<option value="7" @if($dataText->page=='7') selected='selected' @endif>@lang("Summer Club")  </option>
				<option value="8" @if($dataText->page=='8') selected='selected' @endif>@lang("Transportation")</option>
				<option value="9" @if($dataText->page=='9') selected='selected' @endif>@lang("interofice")</option>
				<option value="10" @if($dataText->page=='10') selected='selected' @endif>@lang("helpofice")</option>

			  </select>


        </div>
      </div>
      

      <div class="form-group">
        <label class="col-md-4 text-right">@lang("title")</label>
        <div class="col-md-8">
          <input type="text" name="title" value="{{ $dataText->title }}" class="form-control input-lg"  />
        </div>
      </div>


	<div class="form-group">
		<label class="col-md-4 text-right">@lang("body")</label>
		<div class="col-md-8">
			<input type="text" name="body" value="{{ $dataText->body }}" class="form-control input-lg"  />
		
		</div>
	</div>

	


	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>



@endsection