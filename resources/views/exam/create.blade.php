@extends('layouts.editorDash')


@section('title', '| Add Exam')



@section('main')



<div class="container">
	<div class="row">
		<div class="col">		
		</div>
		<div class="col">			
	  </div>	  
	</div>
     <div class="row">     
      <div class="col-sm">
        <div class='col-lg-12 col-lg-offset-12' >
            <h1>
				
				<i class="fa fa-plus" aria-hidden="true"></i>
				@lang("Add Exam") 
				</h1>
			<hr>
			 {{ Form::open(array('url' => 'exam', 'method' => 'POST'))}}	

			 <div class="form-group">
				@lang("Exam Name")
				<br>
		   
			   {{ Form::text('name', null, array('class' => 'form-control')) }}
			   
		   </div>

		   <div class="form-group">
			@lang("Exam Percent")
			<br>
	   
			{{ Form::number('percent', null, array('class' => 'form-control')) }}
		   
	   </div>
		   
		   
           

		   
		 
	
            {{Form::submit('Add', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
         </div>
    </div>
</div>

  

@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif





@endsection