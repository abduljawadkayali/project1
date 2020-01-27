@include ('includes.navbar')
<html>
<head>

<link rel="stylesheet" href="login.css">


</head>
<body>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">@lang("teacher")</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">@lang("student")</label>
		
		<div class="login-form">
	
			<br>

		<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">@lang("Username")</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">@lang("Password")</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span>@lang("Keep me Signed in")</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="@lang('Sign in')">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">@lang("Forgot Password?")</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user1" class="label">@lang("Username")</label>
					<input id="user1" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass1" class="label">@lang("Password")</label>
					<input id="pass1" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check1" type="checkbox" class="check1" checked>
					<label for="check1"><span class="icon"></span>@lang("Keep me Signed in")</label>
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="@lang('Sign in')" >
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">@lang("Forgot Password?")</a>
				</div>
			</div>

		</div>


	</div>
 </div>

 <br>	

</body>
</html>                            
@include ('includes.footer')