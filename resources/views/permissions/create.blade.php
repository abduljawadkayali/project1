{{-- \resources\views\permissions\create.blade.php --}}
@extends('layouts.dashbored')


<style>
    *{
        text-align: right;
    }
    
    </style>

@section('title', '| Create Permission')

@section('content')

<div style="padding:20px">

    <h1 ><i class='fa fa-key'></i>@lang("Add Permission") </h1>
   

    {{ Form::open(array('url' => 'permissions')) }}

    <div class="form-group">
      
        @lang("Name")
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div><br>
    @if(!$roles->isEmpty())
        <h4>@lang("Assign Permission to Roles")</h4>

        @foreach ($roles as $role) 
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    @endif
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

</div>

@endsection