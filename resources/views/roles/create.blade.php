@extends('layouts.dashbored')

<style>
    *{
        text-align: right;
    }
    
    </style>
@section('title', '| Add Role')

@section('content')

<div class='col-lg-6 col-lg-offset-6'>

    <h1><i class='fa fa-key'></i> @lang("Add Role")</h1>
    <hr>

    {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group">
        @lang("Name")
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>@lang("Assign Permissions")</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection