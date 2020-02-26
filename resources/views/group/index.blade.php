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
					<th>@lang("Class Name")</th>
					<th>@lang("Class Number")</th>
                    <th>@lang("Subjects")</th>
                    <th>@lang("Branches")</th>
          
                    <th>@lang("Action")</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($groups as $group)
                <tr>
					<td>{{ $group->name }}</td>
					<td>{{ $group->classNum }}</td>
                    
                    <td>{{implode(' - ',$group->subjectes()->pluck('name')->toArray()) }}</td>{{-- Retrieve array of permissions associated to a  and convert to string --}}
                    <td>{{implode(' - ',$group->branches()->pluck('name')->toArray()) }}</td>
             
                    <td>
                    <a href="{{ URL::to('group/'.$group->id.'/edit') }}" class="btn btn-info pull-center">@lang("Edit")</a>
          

                    {!! Form::open(['method' => 'DELETE', 'route' => ['group.destroy', $group->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('group/create') }}" class="btn btn-success">@lang("Add Class")</a>

</div>


@endsection