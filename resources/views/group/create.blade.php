@extends('layouts.editorDash')


@section('title', '| Add Class')



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
				@lang("Add Class") 
				</h1>
			<hr>
			 {{ Form::open(array('url' => 'group', 'method' => 'POST'))}}	

			 <div class="form-group">
				@lang("Class Name")
				<br>
		   
			   {{ Form::text('name', null, array('class' => 'form-control')) }}
			   
           </div>


           <div class="form-group">
            @lang("Class Number")
            <br>
       
           {{ Form::number('classNum', null, array('class' => 'form-control')) }}
           
       </div>
       

           <div class='form-group'>
            @lang("Class Subjects")<hr>
            @foreach ($subjects as $subject)
            
                {{ Form::checkbox('subjects[]',  $subject->id ) }}
             
                {{ Form::label($subject->name, ucfirst($subject->name)) }} :
                <label>
                    {{$subject->min}}
                </label> --
                <label>
                    {{$subject->max}}
                </label>
               <br>
    
            @endforeach
        </div>

        <div class='form-group'>
            @lang("Class Branches")<hr>
            @foreach ($branches as $branch)
            
                {{ Form::checkbox('branches[]',  $branch->id ) }}
                
                {{ Form::label($branch->name, ucfirst($branch->name)) }}<br>
    
            @endforeach
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