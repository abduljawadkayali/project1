@extends('layouts.editorDash')


@section('title', '| Add Photo')



@section('main')


<div align="right">
	<a href="{{ route('group.index') }}" class="btn btn-default">@lang("Back")</a>
</div>
<br />




<div class='col-lg-7 col-lg-offset-7'>
   
    <h1><i class='fa fa-edit'></i>@lang("Edit Group:") {{$group->name}} </h1>
    <hr>

    {{ Form::model($group, array('route' => array('group.update', $group->id), 'method' => 'PUT')) }}

    <div class="form-group">
 
        @lang("Class Name")
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

	<div class="form-group">
		@lang("Class Number")
		<br>
   
	   {{ Form::number('classNum', null, array('class' => 'form-control')) }}
	   
   </div>
   
   <h5><b>@lang("Subjects")</b></h5>
	   <div class='form-group'>
        @foreach ($subjects as $subject)
        
		
			{{ Form::checkbox('subjects[]',  $subject->id ) }}
            {{ Form::label($subject->name, ucfirst($subject->name)) }}
            <label>
                {{$subject->min}}
            </label> --
            <label>
                {{$subject->max}}
            </label><br>
           

		@endforeach
    </div>
    
    <h5><b>@lang("Branches")</b></h5>
    <div class='form-group'>
     @foreach ($branches as $branch)
     
         {{ Form::checkbox('branches[]',  $branch->id ) }}
         {{ Form::label($branch->name, ucfirst($branch->name)) }}<br>

     @endforeach
 </div>


  

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
</div>





@endsection