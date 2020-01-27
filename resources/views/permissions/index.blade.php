{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.dashbored')


<style>
    *{
        text-align: right;
    }
    
    </style>
    
@section('title', '| Permissions')

@section('content')
<div class="container">

        
        <h2><i class="fa fa-key"></i>@lang("Available Permissions")</h2>
       
    



 

<div class="col-lg-12 col-lg-offset-12">
    
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>@lang("Permissions")</th>
                    <th>@lang("Operation")</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info " style="margin-right: 3px;">@lang("Edit")</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">@lang("Add Permission")</a>

</div>

@endsection