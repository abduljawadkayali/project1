
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
				
				<i class="fa fa-plus" aria-hidden="true"></i>
				@lang("Add Teacher responsity") 
				</h1>
			<hr>
       
            


     


  

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
 
    <form id="logout-form" action="{{ route('respon.store') }}" method="POST" >
        @csrf


        <div class="form-group">
          <label for="year">@lang("Select year:")</label>
        
          <select name="year" class="form-control">
              <option value="">@lang("--- Select year ---")</option>
           
               @foreach ($year as $key => $value)
       
                 <option value="{{ $key }}">{{ $value }}</option>
            
                 @endforeach
             </select>
         </div>


         <div class="form-group">
          <label for="semister">@lang("Select semister:")</label>
        
          <select name="semister" class="form-control">
              <option value="">@lang("--- Select semister ---")</option>
           
               @foreach ($semister as $key => $value)
       
                 <option value="{{ $key }}">{{ $value }}</option>
            
                 @endforeach
             </select>
         </div>
  


         <div class="form-group">
          <label for="teacher">@lang("Select teacher:")</label>
        
          <select name="teacher" class="form-control">
              <option value="">@lang("--- Select teacher ---")</option>
           
               @foreach ($teacher as $key => $value)
       
                 <option value="{{ $key }}">{{ $value }}</option>
            
                 @endforeach
             </select>
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

            <div class="form-group">
                <label for="subject">@lang("Select Subject")</label>
                <select name="subject" class="form-control">
                <option>@lang("--subject--")</option>
                </select>
            </div>
 
    
       </div>
       <div class="form-group">

         <button class="btn btn-success btn-submit">@lang("Submit")</button>

       </div>
       </form>
      </div>
</div>






    
      
      <script type="text/javascript">
        jQuery(document).ready(function ()
        {
                jQuery('select[name="group"]').on('change',function(){
                   var groupID = jQuery(this).val();

                   if(groupID)
                   {
                      jQuery.ajax({
                         url : 'relation/getBranches/' +groupID,
                         type : "GET",
                         dataType : "json",
                         success:function(data)
                         {
                            console.log(data);
                            jQuery('select[name="branch"]').empty();
                            jQuery.each(data, function(key,value){
                              jQuery.each(value, function(id,name){
                               
                               $('select[name="branch"]').append('<option value="'+ id +'">'+ name +'</option>');
                              });  });
                         }
                      });
                      

                      jQuery.ajax({
                         url : 'relation/getSubjects/' +groupID,
                         type : "GET",
                         dataType : "json",
                         success:function(data)
                         {
                            console.log(data);
                            jQuery('select[name="subject"]').empty();
                            jQuery.each(data, function(key,value){
                              jQuery.each(value, function(id,name){
                               $('select[name="subject"]').append('<option value="'+ id +'">'+ name +'</option>');
                              });  });
                         }
                      });
                   }
                   else
                   {
                    $('select[name="subject"]').empty();
                      $('select[name="branch"]').empty();
                   }
                });
        });
        </script>



@endsection
