@extends('layouts.app')



@section('content')
<style>
    .rtl{
        text-align:right;
        direction: rtl;

    }
    </style>
<div class="container rtl">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>   <a href="/Teacher/TeacherLogin" class="btn ">@lang("Teacher")</a>
                <a href="/login" class="btn ">@lang("Admin")</a>
            </div>
            <div class="card " >
                
                <div class="card-header"  >
                   {{ __('Student Login') }} </div>
           

                <div class="card-body">
                    <form method="POST" href="StudentLogin">
                        @csrf
                       
                    
                    
                        <div class="form-group row">
                            <label for="number" class="col-md-2 col-form-label">{{ __('Student Number') }}</label>
                         
                            <div class="col-md-8">
                              
                                <input id="number" type="number" class="form-control rtl @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>
                           
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label ">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                               
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                   
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
