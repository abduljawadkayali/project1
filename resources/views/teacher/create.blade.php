@extends('layouts.editorDash')


@section('title', '| Add Teacher')



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
				
				<i class="fa fa-user-plus" aria-hidden="true"></i>
				@lang("Add Teacher") 
				</h1>
			<hr>
			 {{ Form::open(array('url' => 'teacher', 'method' => 'POST'))}}	

			 <div class="form-group">
				@lang("Teacher Name")
			
		   
			   {{ Form::text('name', null, array('class' => 'form-control')) }}
			   
           </div>

           <div class="form-group">
            @lang("Teacher email")
            <br>
       
           {{ Form::text('email', null, array('class' => 'form-control')) }}
           
       </div>

       <div class="form-group">
        <!-- {{ Form::label('password', 'Password') }}-->
        @lang("Password")
        <br>
      {{ Form::password('password', array('class' => 'form-control')) }}

  </div>

  <div class="form-group">
       <!--  {{ Form::label('password', 'Confirm Password') }}-->
       @lang("Confirm Password")
       <br>
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

  </div>






           <div class="form-group">
            @lang("Phone")
            <br>
       
           {{ Form::number('phone', null, array('class' => 'form-control')) }}
           
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