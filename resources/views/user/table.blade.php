@extends('template.body')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('UsersCreate')}}" class="btn btn-success">@lang("Create New Techer")</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">@lang("All users")</h4>
                    <p class="card-category"> @lang("this table content admin and teacher")</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="UserTable">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                    @lang("ID")
                                </th>
                                <th>
                                    @lang("Name")
                                </th>
                                <th>
                                    @lang("Email")
                                </th>
                                <th>
                                    @lang("Permissions")
                                </th>
                                <th>
                                    @lang("Options")
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{$user->id}}
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        @lang($user->permissions)
                                    </td>
                                    {{--                                    <td class="text-primary">--}}
                                    {{--                                        <a href='{{url("/user/$user->id/edit")}}'>@lang("edit")</a> <a>@lang("delete")</a>--}}
                                    {{--                                    </td>--}}
                                    <td class="td-actions text-right">
                                        <form action="{{route('UsersDelete',$user->id)}}" method="post">
                                            @csrf
                                            <a href='{{url("/user/$user->id/edit")}}'>
                                                <button type="button" rel="tooltip" title=""
                                                        class="btn btn-primary btn-link btn-sm"
                                                        data-original-title="@lang("Edit")">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </a>
                                            @if(!($user->permissions == 'admin' || Auth::id()==$user->id))
                                                <button type="submit" rel="tooltip" title=""
                                                        class="btn btn-danger btn-link btn-sm"
                                                        data-original-title="@lang("Remove")">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

    </script>
@endsection
