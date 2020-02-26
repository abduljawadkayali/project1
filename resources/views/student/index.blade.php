@extends('layouts.editorDash')



@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
 
@endsection

@section('main')


<div class="col-lg-12 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col">
            <h2><i class="fa fa-key"></i> @lang("Students")</h2>
                
          </div>
        </div>
          <hr>
      </div>
    

    
    <div class="table-responsive">
        <table class="table datatable table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("Student Number")</th>
                    <th>@lang("Student Name")</th>
                    <th>@lang("Student email")</th>
                    <th>@lang("Phone")</th>
                    <th>@lang("Student Class")</th>
                    
                 
                    <th>@lang("Student Branch")</th>
                    <th>@lang("Action")</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->number }}</td>

                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->group->name }}</td>
                    <td>{{ $student->branch->name }}</td>


                   
					<td>
                   
                    <a href="{{ URL::to('student/'.$student->id.'/edit') }}" class="btn btn-info pull-center">@lang("Edit")</a>
          

                    {!! Form::open(['method' => 'DELETE', 'route' => ['student.destroy', $student->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('AddStudent') }}" class="btn btn-success">@lang("Add Class")</a>

</div>


<script>
    $(document).ready( function () {
        $('.datatable').DataTable();
        $('div.dataTables_filter label input').addClass('form-control');
    } );
    </script>
     

@endsection