<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
</head>
<body class="login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="{{ url('/') }}"><b>i</b>Home</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Login</p>

			<form action="{{ route('login') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
					<span class="fa fa-envelope form-control-feedback"></span>
					@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
					<input type="password" class="form-control" placeholder="Password" name="password" required>
					<span class="fa fa-lock form-control-feedback"></span>
					@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn-custom">Sign In</button>
					</div>
					<div class="col-xs-12 make-account">
						<a href="{{ url('/register') }}" class="text-center">No account? Make one!</a>
					</div>
					<!-- /.col -->
				</div>
			</form>
		</div>
		<!-- /.login-box-body -->
	</div>
</body>
</html>