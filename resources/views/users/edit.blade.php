{{-- \resources\views\users\edit.blade.php --}}

@extends('layouts.dashbored')

<style>
    *{
        text-align: right;
    }
    
    </style>


@section('title', '| Edit User')

@section('content')
 <div class="row">

      <div class="col-sm">
  <div class='col-lg-12 col-lg-offset-12'>
    <h1> 
    <i class='fa fa-user-plus'></i>
    @lang("Edit"){{$user->name}} </h1>
    <hr>

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

    <div class="form-group">
             <!--{{ Form::label('name', 'Name') }}-->
            @lang("Name")
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
            <!-- {{ Form::label('email', 'Email') }}-->
            @lang("Email")
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>@lang("Give Role")</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
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

    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

 </div>
 </div>
 <div class="col-sm">
        
</div>
</div>

@endsection