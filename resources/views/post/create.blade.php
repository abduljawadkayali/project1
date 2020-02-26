@extends('layouts.parent')

@section('title', '| Create New Post')

@section('main')


        <div class="container">
          <div class="row">
            <div class="col">
              <h1>
                <i class="fa fa-plus" aria-hidden="true"></i>
                @lang("Create New Post") 
                </h1>
              <hr>
              
            </div>
            <div class="col">
              
            </div>
            
          </div>
             <div class="row">
             
              <div class="col-sm">
                <div class='col-lg-12 col-lg-offset-12' >

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'posts.store')) }}

        <div class="form-group">
          @lang("title")
            {{ Form::text('title', null, array('class' => 'form-control')) }}
            
            <br>

           
            
            @lang("page")
            <br>
            <br>    	   	
		
			      
			{{Form::select('page', [
       '0' => 'منشور',
       '1' => 'الرئيسية',
			 '2' => 'الروضة',
			 '3' => 'المدرسة الابتدائية',
			 '4' =>  'المدرسة الاعدادية',
			 '5' =>  'المدرسة الثاثوية',
			 '6' => 'المجلة',
			 '7' => 'النادي الصيفي',   
			 '8' => 'المواصلات',
			 '9' => 'المكتب الاعلامي',
			 '10' => 'المكتب الخدمي'
			],null ,['class' => 'browser-default custom-select'])}} 
	
            <br>
            <br>
            <h4 style="text-align:center;">@lang("body")</h4>
                        

          

         
           {{ Form::textarea('body', null, array('style'=>'text-align: right!important;','class' => 'form-control', 'id'=>'summary-ckeditor')) }}

            

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection