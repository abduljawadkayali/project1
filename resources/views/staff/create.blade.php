@extends('layouts.parent')


@section('title', '| Add Photo')



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
				@lang("Add employe") 
				</h1>
			<hr>
			 {{ Form::open(array('url' => 'staff', 'method' => 'POST', 'files' => true))}}	

			 <div class="form-group">
				@lang("Name")
				<br>
		   
			   {{ Form::text('name', null, array('class' => 'form-control')) }}
			   
		   </div>

		   
		   <div class="form-group">
			@lang("job")
			<br>
	   
		   {{ Form::text('job', null, array('class' => 'form-control')) }}
		   
	   </div>
			<br> 
			 @lang("branch")
			<br>
		    
			
			


			<div class="form-group " >
			      
			{{Form::select('branch', ['11' => 'الادارة',
			 '12' => 'الروضة',
			 '13' => 'المدرسة الابتدائية',
			 '14' =>  'المدرسة الاعدادية',
			 '15' => 'المدرسة الثانوية'
			],null ,['class' => 'browser-default custom-select'])}} 
		</div>
            <div class="form-group">
                 @lang("description")
				 <br>
			
				{{ Form::textarea('description', null, array('class' => 'form-control', 'id'=>'summary-ckeditor')) }}
				
			</div>

			

		  

	   <div class="form-group">
		@lang("mail")
		<br>
   
	   {{ Form::text('mail', null, array('class' => 'form-control')) }}
	   
   </div>

   <div class="form-group">
	@lang("whatsup")
	<br>

   {{ Form::text('whatsup', null, array('class' => 'form-control')) }}
   
</div>

<div class="form-group">
	@lang("facebook")
	<br>

   {{ Form::text('facebook', null, array('class' => 'form-control')) }}
   
</div>





				{{ Form::file('image') }}
          
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


