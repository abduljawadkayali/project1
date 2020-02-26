@extends('StudentAdmin.Dashbored')



@section('main')


@section('header')


 
@endsection

@section('main')


<div class="col-lg-12 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col">
          
        </div>
       
        </div>
          <hr>
      </div>	
      
    
    <div class="table-responsive">
        <table class="table  table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang("Subject Name")</th>
                    <th>@lang("Result")</th>
            

                </tr>
            </thead>

            <tbody>
                @foreach ($data as $result)
                
                <tr>
                    <td>{{ $result->subject->name }}</td>
                    <td>{{ $result->degree }}</td>
                    
                </tr>
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