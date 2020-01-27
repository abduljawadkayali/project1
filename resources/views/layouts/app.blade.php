<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	

	

		
	

	
		<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="../login.css">
		<!-- Styles -->

	<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/font-awesome/css/font-awesome.min.css">
		<!-- Google fonts - Roboto-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
		<!-- Bootstrap Select-->
	<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/bootstrap-select/css/bootstrap-select.min.css">
		<!-- owl carousel-->
	<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/owl.carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/owl.carousel/assets/owl.theme.default.css">
		<!-- theme stylesheet-->
	<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/css/style.default.css" id="theme-stylesheet">
		<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/css/custom.css">
		<!-- Favicon and apple touch icons-->
	<link rel="apple-touch-icon" sizes="152x152" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/img/apple-touch-icon-152x152.png">
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
</head>
<body>
	<header class="nav-holder make-sticky">
		<div id="navbar" role="navigation" class="navbar navbar-expand-lg" >
           
             
			<button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
			
			
			
			<div class="container-fluid">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
						@guest
						<li class="nav-item">
							
							<li class="nav-item login"><a href="{{ route('login') }}" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block"> @lang("Login")</span> <b class="caret"></b></a> </li>    
							<li class="nav-item login"><a href="{{ route('register') }}" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block"> @lang("sign up")</span> <b class="caret"></b></a> </li>    
						</li>
						
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
								<a class="nav-link" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest


                    </ul>

					<!-- Right Side Of Navbar -->
					<div id="navigation" class="navbar-collapse collapse">
				
				
				
						<ul class="nav navbar-nav ml-auto">
					  
					  
						
						<li class="nav-item dropdown "><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">@lang("ofices") <b class="caret"></b></a>
							<ul class="dropdown-menu">
							  <li class="dropdown-item"><a href="bus" class="nav-link">@lang("Transportation")</a></li>
							  <li class="dropdown-item"><a href="interviewofice" class="nav-link">@lang("interofice")</a></li>
							  <li class="dropdown-item"><a href="service" class="nav-link">@lang("helpofice")</a></li>              
							
		  
							</ul>
		  
						<li class="nav-item  "><a href="club" > @lang("Summer Club") <b class="caret"></b></a> </li> 
						 <li class="nav-item  "><a href="news" >@lang("Magazine") <b class="caret"></b></a> </li>
						   <!-- ========== Contact dropdown ==================-->
						  <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">@lang("Staff") <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<li class="dropdown-item"><a href="mangement" class="nav-link">@lang("Administration")</a></li>
							  <li class="dropdown-item"><a href="kgmang" class="nav-link">@lang("Kindergarten")</a></li>
							  <li class="dropdown-item"><a href="firstmang" class="nav-link">@lang("Primary School")</a></li>
							  <li class="dropdown-item"><a href="secondmang" class="nav-link">@lang("Preparatory School")</a></li>
							  <li class="dropdown-item"><a href="highmang" class="nav-link">@lang("High school")</a></li>
											
		  
							</ul>
						  </li>
						  <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">@lang("Our departments") <b class="caret"></b></a>
							<ul class="dropdown-menu">
							  <li class="dropdown-item"><a href="/kg" class="nav-link">@lang("Kindergarten")</a></li>
							  <li class="dropdown-item"><a href="/firstschool" class="nav-link">@lang("Primary School")</a></li>
							  <li class="dropdown-item"><a href="/secschool" class="nav-link">@lang("Preparatory School")</a></li>
							  <li class="dropdown-item"><a href="/highschool" class="nav-link">@lang("High school")</a></li>
							 
							
		  
							</ul>
						  </li>
						 
						   <li class="nav-item "><a href="/welcome" >@lang("home") <b class="caret"></b></a> </li>
						</ul>
		  
						
		  
					  </div>
                 
                </div>
            </div>
		</nav>
	</header>
		


	@include ('includes.messages')
        <main class="py-4">
            @yield('content')
        </main>
	</div>
	














	<script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/js/jquery.parallax-1.1.3.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-0-2/js/front.js"></script>

    <script>
    $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>

@include ('includes.footer')
</body>
</html>
