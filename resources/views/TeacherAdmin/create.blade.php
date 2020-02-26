@extends('TeacherAdmin.Dashbored')



@section('main')


@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

 
@endsection

@section('main')


<div class="col-lg-12 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col">
            <h2><i class="fa fa-plus"></i> @lang("Add Exam Results")</h2>
        </div>
        <form  method="post">
					
            <a href="{{ url('Teacher/action/'. $year_id .'/'
            .$semister_id.'/'
            . $class_id  . '/' 
            . $branch_id  . '/' 
            . $subject_id  . '/'.
            $exam_id )}}"
            class="btn btn-warning">@lang("Edit")</a>
        </form>
        </div>
          <hr>
      </div>	
      <form  action="{{ route('TeacherHome.store') }}" method="POST" >
        @csrf

        <input type="hidden"  name="year_id" value="{{ $year_id }}">
        <input type="hidden"  name="semister_id" value="{{ $semister_id }}">
        <input type="hidden"  name="exam_id" value="{{ $exam_id }}">
        <input type="hidden"  name="subject_id" value="{{ $subject_id }}">
   
    
    <div class="table-responsive">
        <table class="table datatable table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("Student Name")</th>
                    <th>@lang("Student Number")</th>
                    
                    <th>@lang("Student Result")</th>
            

                </tr>
            </thead>

            <tbody>
                @foreach ($data as $result)
                <tr>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->number }}</td>

                    <td>
                    <input type="hidden" name="student_id[]" value="{{ $result->id }}" class="form-control">
                    <input type="number" name="degree[]"   class="form-control">
                    
                </td>
                    
                </tr>
                @endforeach
            </tbody>
       

        </table>
           </div>
       <div class="form-group">

        <button class="btn btn-success btn-submit">@lang("Submit")</button>

      </div>
      </form>

</div>


<script>
    $(document).ready( function () {
        $('.datatable').DataTable();
        $('div.dataTables_filter label input').addClass('form-control');
    } );
    </script>
     

@endsection