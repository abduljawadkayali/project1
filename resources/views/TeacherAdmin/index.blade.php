@extends('TeacherAdmin.Dashbored')


@section('header')

 
@endsection
@section('main')

<div class="col-lg-10 col-lg-offset-1">
    <div class="container">
        <div class="row">
          <div class="col">
            <h2><i class="fa fa-key"></i> @lang("Years")</h2>
                
          </div>

        </div>
          <hr>
          @foreach ($data as $row)
          <div class="card border-success mb-3" style="max-width: 20rem;">
            <a href="{{$row->route}}">
            <div class="card-header">{{__($header)
            }}</div>
            <div class="card-body">
              <h4 class="card-title">{{$row->name}}</h4>
            </div></a>
          </div>
              
          @endforeach
      </div>
    </div>
</div>

@endsection