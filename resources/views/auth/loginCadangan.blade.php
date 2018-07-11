@extends('layouts.app')

@section('content')
<div class="limiter">
	<div class="container-login100" style="background-image: url('{{ asset('assets/images/img-01.jpg') }}');">
		<div class="wrap-login100 p-t-190 p-b-30">
			<form class="login100-form validate-form" action="{{ route('login') }}">
				{{ csrf_field() }}
				<div class="login100-form-avatar">
					<img src="{{ asset('assets/images/logo.png') }}" alt="AVATAR">
				</div>

				<span class="login100-form-title p-t-20 p-b-45">
					Perpustakaan Dinas Psikologi Angkatan Darat
				</span>

				<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
					<input class="input100" type="text" name="username" placeholder="Username">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-user"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
					<input class="input100" type="password" name="pass" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock"></i>
					</span>
				</div>

				<div class="container-login100-form-btn p-t-10">
					<button class="login100-form-btn">
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
	</div>

@endsection