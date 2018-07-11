<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Perpustakaan</title>
		<link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		<style type="text/css">
	      body {
	        padding-top: 40px;
	        padding-bottom: 40px;
	        background-color: #f5f5f5;
	      }

	      .form-signin {
	        max-width: 300px;
	        padding: 19px 29px 29px;
	        margin: 0 auto 20px;
	        background-color: #fff;
	        border: 1px solid #e5e5e5;
	        -webkit-border-radius: 5px;
	           -moz-border-radius: 5px;
	                border-radius: 5px;
	        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	                box-shadow: 0 1px 2px rgba(0,0,0,.05);
	      }
	      .form-signin .form-signin-heading,
	      .form-signin .checkbox {
	        margin-bottom: 10px;
	      }
	      .form-signin input[type="text"],
	      .form-signin input[type="password"] {
	        font-size: 16px;
	        height: auto;
	        margin-bottom: 15px;
	        padding: 7px 9px;
	      }

	    </style>
		<!--[if lt IE 9]>
			<script src="{{ asset('http://belajar.laravel/js/html5shiv_3_7_2.min.js') }}"></script>
			<script src="{{ asset('http://belajar.laravel/js/respond_1_4_2.min.js') }}"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container">

	      <form class="form-signin" action="#" method="post">
	        <center><h2>Login</h2></center>
	        <center><input type="text" class="input-block-level" placeholder="Username" name="u" autofocus required>
	        <input type="password" class="input-block-level" placeholder="Password" name="p" required></center>
	        <a href="{{ url('about') }}">Login Admin<span class="sr-only"></span></a>
	      </form>

    	</div>
		
		<script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
		<script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script> 
	</body>
	
	
</html>