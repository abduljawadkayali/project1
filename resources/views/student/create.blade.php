@extends('layouts.editorDash')


@section('title', '| Add Student')



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
				@lang("Add Student") 
				</h1>
			<hr>
          {{ Form::open(array('url' => 'student', 'method' => 'POST'))}}	
          

             <div class="form-group">
                @lang("Student Number")
                <br>
           
           
               {{ Form::number('number', null, array('class' => 'form-control')) }}
                                                                                                              
           </div>


			 <div class="form-group">
				@lang("Student Name")
				<br>
		   
			   {{ Form::text('name', null, array('class' => 'form-control')) }}
			   
           </div>

           <div class="form-group">
            @lang("Student email")
            <br>
       
           {{ Form::text('email', null, array('class' => 'form-control')) }}
           
       </div>

       <div class="form-group">
        <!-- {{ Form::label('password', 'Password') }}-->
        @lang("Student password")
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
       
       <div class="form-group">
        <label for="group">@lang("Select group:")</label>
        <select name="group" class="form-control">
            <option value="">@lang("--- Select group ---")</option>
           
            @foreach ($group as $key => $value)
      
            <option value="{{ $key }}">{{ $value }}</option>
            
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="branch">@lang("Select branch:")</label>
        <select name="branch" class="form-control">
        <option>@lang("--branch--")</option>
        </select>
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


<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="group"]').on('change',function(){
               var groupID = jQuery(this).val();

               if(groupID)
               {
                  jQuery.ajax({
                     url : 'AddStudent/getBranches/' +groupID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="branch"]').empty();
                        jQuery.each(data, function(key,value){
                           jQuery.each(value, function(id,name){
                           $('select[name="branch"]').append('<option value="'+ id +'">'+ name +'</option>');
                        });
                        });
                     }
                  });

                  
               }
               else
               {
         
                  $('select[name="branch"]').empty();
               }
            });
    });
    </script>


@endsection