@extends('template.body')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">@lang("Teachers")</h4>
                    <p class="card-category">@lang("Create New Teacher")</p>
                </div>
                <div class="card-body">
                    @if($page=='create')
                        @php($FormAction=route('UsersStore'))
                        @php($ActionButton='Create')
                    @elseif($page=='edit')
                        @php($FormAction=url("user/$user->id"))
                        @php($ActionButton='Update')
                    @endif
                    <form method="post" action="{{$FormAction}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">@lang("Name")</label>
                                    <input name="name" type="text" class="form-control" value="{{old('name',isset($user)?$user->name : '')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">@lang("Email address")</label>
                                    <input name="email" type="email" value="{{old('email',isset($user)?$user->email : '')}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">@lang("Passowrd")</label>
                                    <input name="password" type="password" class="form-control">
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary pull-right">@lang($ActionButton)</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
