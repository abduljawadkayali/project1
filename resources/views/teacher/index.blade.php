@extends('layouts.editorDash')


@section('title', '| index')



@section('main')


<div class="col-lg-10 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col">
            <h2><i class="fa fa-key"></i> @lang("Classes")</h2>
                
          </div>
        </div>
          <hr>
      </div>
    

    
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("Teacher Name")</th>
                    <th>@lang("Teacher email")</th>
                    <th>@lang("Teacher phone")</th>
                 
                    <th>@lang("Action")</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teacheres as $teacher)
                <tr>

                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->phone }}</td>
					
                    <td>
                    <a href="{{ URL::to('teacher/'.$teacher->id.'/edit') }}" class="btn btn-info pull-center">@lang("Edit")</a>
          

                    {!! Form::open(['method' => 'DELETE', 'route' => ['teacher.destroy', $teacher->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('teacher/create') }}" class="btn btn-success">@lang("Add Class")</a>

</div>


@endsection