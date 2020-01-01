  @include ('includes.navbar')


<style type="text/css">
	body {
		color: #fff;
		background: #ffffff;
	}
	.form-control {
		min-height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: transparent;
	}
	.form-control:focus {
		background: #e2e2e2;
	}
	.form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 450px;
		margin: 30px auto;
		text-align: center;
	}
	.login-form h2 {
        margin: 10px 0 25px;
    }
    .login-form form {
		color: #7a7a7a;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #3598dc;
		border: none;
        outline: none !important;
    }
	
</style>
</head>
<body>


<div class="login-form">
    <form action="log" method="post">
        <h2 class="text-center"> تسجيل الدخول</h2>   
        <div class="form-group has-error">
        	<input type="text" class="form-control" name="username" placeholder="اسم المستخدم" required="required">

        </div>
	
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required="required">
        </div>
		        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">تسجيل دخول</button>
        </div>
        <p><a href="#">نسيت كلمة المرور ؟</a></p>
    </form>
</div>
@include ('includes.footer')
</body>
</html>                            
