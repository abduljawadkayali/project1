@extends('layouts.dashbored')

<style>
    *{
        text-align: right;
    }
    
    </style>
@section('title', '| Edit Role')

@section('content')

<div class='col-lg-7 col-lg-offset-7'>
    <h1>  {{$role->name}}
    <h1><i class='fa fa-key'></i>@lang("Edit Role:")  </h1>
    <hr>

    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

    <div class="form-group">
 
        @lang("Role Name")
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>@lang("Assign Permissions")</b></h5>
    @foreach ($permissions as $permission)

        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

    @endforeach
    <br>
    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
</div>

@endsection