{{-- \resources\views\users\create.blade.php --}}

@extends('layouts.dashbored')
<style>
*{
    text-align: right;
}

</style>

@section('title', '| Add User')

@section('content')

<div class="container">
    <div class="row">
     
      <div class="col-sm">
        <div class='col-lg-12 col-lg-offset-12' >

            <h1><i class='fa fa-user-plus' ></i>@lang("Add User") </h1>
            <hr>
        
            {{ Form::open(array('url' => 'users')) }}
        
            <div class="form-group ">
                <!--{{ Form::label('name', 'Name') }}-->
                @lang("Name")
                {{ Form::text('name', '', array('class' => 'rtl form-control')) }}
            </div>
        
            <div class="form-group">
                 <!-- {{ Form::label('email', 'Email') }}-->
                 @lang("Email")
                {{ Form::email('email', '', array('class' => 'form-control')) }}
            </div>
        
            <div class='form-group'>
                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
        
                @endforeach
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
        
            {{Form::submit('Add', array('class' => 'btn btn-primary')) }}
            
            
            {{ Form::close() }}
        
        </div>
      </div>
      <div class="col-sm">
       
      </div>
    </div>
  </div>
<div class="row">
<div class='col-lg-4 '>

</div>



</div>

@endsection