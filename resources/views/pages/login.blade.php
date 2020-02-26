@include ('includes.navbar')

<html lang="ar" dir="rtl">
<head>
	<title>@lang("Future Generation Private Schools")</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
<!--===============================================================================================-->



</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(/assets/img/bg-01.jpg);">
					<span class="login100-form-title-1">
            @lang("Sign in")
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">@lang("Username")</span>
						<input class="input100" type="text" name="username" placeholder=@lang("Enter username")>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">@lang("Password")</span>
						<input class="input100" type="password" name="pass" placeholder=@lang("Enter password")>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
                >@lang("Keep me Signed in")
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								@lang("Forgot Password?")
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							@lang("Login")
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  
  
 
<!--===============================================================================================-->
	<script src="/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/assets/js/main.js"></script>

</body>
</html>                            
@include ('includes.footer')




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
