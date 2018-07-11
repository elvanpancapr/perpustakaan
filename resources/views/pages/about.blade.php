<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Perpustakaan</title>
		<link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="{{ asset('http://belajar.laravel/js/html5shiv_3_7_2.min.js') }}"></script>
			<script src="{{ asset('http://belajar.laravel/js/respond_1_4_2.min.js') }}"></script>
		<![endif]-->
	</head>

	<body>
		<div id="admin">
			<h2>Admin</h2>
			<p>Ini Halaman Admin</p>
			<a href="{{ url('login') }}">Menu Admin<span class="sr-only"></span></a>
		</div>
		<script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
		<script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script> 
	</body>
	
	<div id="footer">
		<p>&copy; 2018 belajar.laravel</p>
	</div>
</html>