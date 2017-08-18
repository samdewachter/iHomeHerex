<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iHome</title>
	<meta name="description" content="iHome, the house that brings people closer together.">
	<meta name="author" content="Sam De Wachter">
	<link rel="icon" href="{{ asset('/images/iHome.png') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/eleganticons/et-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cardio.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/front.css') }}">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><i rel="icon" class="fa fa-home"></i></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#testimonials">Testimonials</a></li>
					<li><a href="#sneakpeek">Sneakpeek</a></li>
					<li><a href="#price">Price</a></li>
					<li><a href="#video">Video</a></li>
					@if (Auth::guest())
						<li><a href="{{ url('/register') }}" class="btn btn-blue">Register</a></li>
						<li><a href="{{ url('/login') }}" class="btn btn-blue">Login</a></li>
					@else
					<li>
							<a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
						</li>
						<li>
							<a href="{{ route('logout') }}" class="btn btn-blue"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</li>
						
					@endif
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')

	<footer>
		<div class="container">
			<div class="col-sm-8">
				<p>&copy; 2017 Made by <span class="footer-name">Samdewachter</span></p>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/wow.min.j') }}s"></script>
	<script src="{{ asset('js/typewriter.js') }}"></script>
	<script src="{{ asset('js/jquery.onepagenav.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>