@extends('layouts.app')






@section('content')

<div class="login-wrap">
	<div class="login-html">
        <form method="POST" action="{{ route('login') }}">
        
		
		
		<div class="login-form">
            @csrf
	
            

		<div class="">

            <div class="input-group">
                <div class="text-group-field pickup-day choose-time">
                  <div class="inner-block">
                    <input id="4" class="rad radio-custom input-group-field" name="radio-group" type="radio" checked>
                    <label for="4" class="radio-custom-label">@lang("student")</label>
                  </div>
                </div>
                <div class="text-group-field pickup-day choose-time">
                  <div class="inner-block">
                    <input id="3" class="rad radio-custom input-group-field"name="radio-group" type="radio">
                    <label for="3" class="radio-custom-label">@lang("teacher")</label>
                  </div>
                </div>
                <div class="text-group-field pickup-day choose-time">
                  <div class="inner-block">
                    <input id="2" class="rad radio-custom input-group-field" name="radio-group" type="radio">
                    <label for="2" class="radio-custom-label">@lang("admin")</label>
                  </div>
                </div>
                <div class="text-group-field pickup-day choose-time">
               
             </div>
				<div class="group">
					<label for="email" class="label">@lang("Username")</label>

                            
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" required autocomplete="current-email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
                    <label for="password" class="label">@lang("Password")</label>
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="group">
                    <input id="check" type="checkbox"  name="remember" id="remember" class="check" {{ old('remember') ? 'checked' : '' }}>
                    <label for="check"><span class="icon"></span>@lang("Keep me Signed in")</label>

                </div>
                
               

				<div class="group">
                    <button type="submit" class="button">
                        {{ __('Login') }}
                    </button>
                    <div class="hr"></div>
                    <div class="foot-lnk">
    
    
                    @if (Route::has('password.request'))
                        <a class="foot-lnk"  href="{{ route('password.request') }}">
                            @lang("Forgot Password?")
                        </a>
                    @endif
                </div>
				</div>
        </div>






		</div>


    </div>
</form>
 </div>
</div>




@endsection
