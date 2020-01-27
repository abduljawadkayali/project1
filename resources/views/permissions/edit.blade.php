@extends('layouts.dashbored')

<style>
    *{
        text-align: right;
    }
    
    </style>


@section('title', '| Edit Permission')

@section('content')

<div class='col-lg-6 col-lg-offset-6'>


    <h1><i class='fa fa-key'></i> @lang("Edit"){{$permission->name}}</h1>
    <br>

    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

    <div class="form-group">
        <h3>  @lang("Permission Name")</h3>
        <br>
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection