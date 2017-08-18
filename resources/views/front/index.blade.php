@extends('layouts.front')

@section('content')
	<header id="home">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white"><b>i</b>Home.</h3>
							<h1 class="white typed">Welcome home.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="testimonials" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Testimonials</h2>
				<h4 class="light muted">Some testimonials of satisfied customers!</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('images/joske.jpg') }}" class="icon">
						</div>
						<h4 class="heading">Joske Vermeulen</h4>
						<p class="description">“This is the new best thing for your home!”</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('images/jan.jpg') }}" class="icon">
						</div>
						<h4 class="heading">Jan Jansen</h4>
						<p class="description">“I haven't felt this connected to my family in ages.”</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('images/lise.jpg') }}" class="icon">
						</div>
						<h4 class="heading">Lise Lenaerts</h4>
						<p class="description">“You not only have another way to communicate with the people close to you, but it's also a nice piece of design in my home.”</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="sneakpeek" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Sneakpeek</h2>
				<h4 class="light muted">Take a peek inside of iHome!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('/images/sneakpeek1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Wires inside</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('/images/sneakpeek2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">LED's inside</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('/images/sneakpeek3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Raspberry Pi 3</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="price" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Price</h2>
				<h4 class="light white margin-bottom">iHome only costs €79,99!</h4>
			</div>
		</div>
	</section>
	<section id="video" class="promo-section blue-bg">
		<div class="container">
			<h3 class="white light text-center promo-title">The iHome promotion video</h3>
			<div class="promo-video-wrapper">
				<iframe class="promo-video" src="http://player.vimeo.com/video/230210539?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"></iframe>
			</div>
		</div>
	</section>
@endsection