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
           
            <a href="{{ URL::to('/Teacher/exam/'.$year_id.'/'.$semister_id.'/'.$class_id.'/'.$branch_id.'/'.$subject_id.'/'.$exam_id) }}" class="btn btn-primary">@lang("Back")</a>
           
          
            <h2><i class="fa fa-plus"></i> @lang("Show all Exam Results")</h2>
        </div>
       
        </div>
          <hr>
      </div>	
     

    
    <div class="table-responsive">
        <table class="table datatable table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("Student Name")</th>
                    <th>@lang("Student Number")</th>
                    
                    <th>@lang("Student Result")</th>
                    <th>@lang("Action")</th>
            

                </tr>
            </thead>

            <tbody>
                @foreach ($data as $result)
                <tr>
                    <td>{{ $result->student->name }}</td>
                    <td>{{ $result->student->number }}</td>
                    
                  
                        <td>{{ $result->degree }}</td>

                <td>
                   
                  


                    <form action="{{ route('TeacherHome.destroy', $result->id) }}" method="post">
					
                      
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">@lang("Delete")</button>
                    </form>

                    </td>

                    
                @endforeach
            </tbody>
       

        </table>
           </div>
     
   

</div>


<script>
    $(document).ready( function () {
        $('.datatable').DataTable();
        $('div.dataTables_filter label input').addClass('form-control');
    } );
    </script>
     

@endsection