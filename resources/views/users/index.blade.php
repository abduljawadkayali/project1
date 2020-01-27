{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.dashbored ')

    

@section('title', '| Users')

@section('content')

<div class="container">
    <div class="row">
        <div class="col ">
          
            <h1><i class="fa fa-users"></i>   @lang("User Administration") </h1>
          
         
 
        </div>
      </div>


  
       
 
    <hr>
  </div>



<div class="col-lg-12 col-lg-offset-1">

    
     
  
    <div class="table-responsive">
        <table class="table table-bordered table-striped"  >

            <thead>
                <tr>
            
                    <th>@lang("Name")</th>
  
                    <th>@lang("Email")</th>
               
                    <th>@lang("User Roles")</th>
                    <th>@lang("Operations")</th>
                    
               
                   
               
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                   
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">@lang("Edit")</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                  

               
         
                
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-success">@lang("Add User")</a>

</div>

@endsection