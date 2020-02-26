
@extends('layouts.editorDash')


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
				
				<i class="fa fa-key" aria-hidden="true"></i>
                @lang("Edit subject responsity") <br> </h1>
                <h3> @lang("the old teacher")
                {{ $respon->teacher->name }}</h3>
				
			<hr>
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
<div class="container">
    <form method="post" action="{{ route('respon.update', $respon->id) }}" enctype="multipart/form-data">
 

        @csrf
        @method('PATCH')

 
 


           <div class="form-group">
            <label for="group">@lang("Year : ")</label>{!! $respon->year->name !!}
        </div>

        <div class="form-group">
            <label for="group">@lang("Semister : ")</label>{!! $respon->semister->name !!}
        </div>

    

 
            <div class="form-group">
                <label for="group">@lang("Group : ")</label>{!! $respon->group->name !!}
            </div>
            <div class="form-group">
                <label for="branch">@lang("Branch : ")</label>{!! $respon->branch->name !!}
               
            </div>

            <div class="form-group">
                <label for="subject">@lang("Subject : ")</label>{!! $respon->subject->name !!}
            </div>
 
            <div class="form-group">
                <label for="teacher">@lang("Select teacher : ")</label>                                              
                <select name="teacher" class="form-control">
                    <option value="">@lang("--- Select teacher ---")</option>                            
                     @foreach ($teacher as $key => $value)
                       <option value="{{ $key }}">{{ $value }}</option>
                       @endforeach
                   </select>
               </div>
    
       </div>
       <div class="form-group">

         <button class="btn btn-success btn-submit">@lang("save")</button>

       </div>
       </form>
      </div>
</div>








@endsection
