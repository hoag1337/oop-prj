<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link  href="font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">
	<link href="{{ asset('css/search_bar.css') }}" rel="stylesheet">
	<script src="css/search_bar.css"></script>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    @livewireStyles
	</head>
	<body>
	{{-- <div
		class = "col-xl-3 col-lg-4">
		<div class="header-info header-info-right">
			@auth
			<ul>
				<li><i  class="fi-rs-user"></i>
					{{Auth::user()->name}}/
					<form action="{{route('logout')}}" method="post">
					@csrf
					<a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
					</form>
				</li>
			</ul>
			@else
			<ul>
				<li><i class="fi-rs-key"><a href="{{route('login')}}">Login</a>/ <a href="{{route('register')}}">Register</a></i></li>
			</ul>
			@endif
		</div>

	</div> --}}
	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				@auth
				<ul>
					@if(Auth::user()->role == 'admin')
					<li><i  class="fi-rs-user"></i>
						Hi,Admin {{Auth::user()->name}}
						<a href="{{route('products.index')}}">Admin Dashboard</a>
						<form action="{{route('logout')}}" method="post">
						@csrf
						<a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
						</form>
					</li>
					@else
					<li><i  class="fi-rs-user"></i>
						Hi,User {{Auth::user()->name}}
						<form action="{{route('logout')}}" method="post">
						@csrf
						<a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
						</form>
					</li>
					@endif
				</ul>	
				@else
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="{{route('register')}}">Register</a></li>
					<li><a href="{{Route('login')}}">Login</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				@endif
				<p class="fh5co-social-icon">
					<a href="#"><i class="icon-twitter2"></i></a>
					<a href="#"><i class="icon-facebook2"></i></a>
					<a href="#"><i class="icon-instagram"></i></a>
					<a href="#"><i class="icon-dribbble2"></i></a>
					<a href="#"><i class="icon-youtube"></i></a>
				</p>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<h1 class="text-center"><a class="fh5co-logo" href="{{route('home')}}">hoag's little shop</a></h1>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading">It's where to find the things you need.</h2>
						<p><span>Created with <i class="icon-heart3"></i> by d2hoag.</span></p>
					</div>
				</div>
			</div>
		</div>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/slide_1.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h2>All the good you need.</h2>
			   					<span>Branding</span>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/slide_2.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h2>Guaranteed Quanlity.</h2>
			   					<span>Trust</span>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/slide_3.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h2>Always besides you.</h2>
			   					<span>Care</span>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		{{-- <div class="wrap">
			<div class="search">
			   <input type="text" class="searchTerm" placeholder="What are you looking for?">
			   <button type="submit" class="searchButton">
				 <i class="fa fa-search"></i>
			  </button>
			</div>
		 </div> --}}
		{{-- <div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						<div class="heading-section">
							<h2>Our Services</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<div class="icon">
								<span><i class="icon-mobile"></i></span>
							</div>
							<h3>Responsive</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<div class="icon">
								<span><i class="icon-browser"></i></span>
							</div>
							<h3>Compatible to all browser</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<div class="icon">
								<span><i class="icon-toolbox"></i></span>
							</div>
							<h3>Web Design</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		{{-- <div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						<div class="heading-section">
							<h2>Our Website</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center animate-box">
						<div class="work" style="background-image: url(images/img-1.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-6 text-center animate-box">
						<div class="work" style="background-image: url(images/img-2.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-6 text-center animate-box">
						<div class="work" style="background-image: url(images/img-3.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-6 text-center animate-box">
						<div class="work" style="background-image: url(images/img-4.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<p class="text-center view-button animate-box"><a href="#" class="btn btn-primary btn-outline btn-lg">See More Project</a></p>
				</div>
			</div>
		</div> --}}

		{{-- <div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box">
						<div class="heading-section">
							<h2>Branding</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="work" style="background-image: url(images/img-5.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url(images/img-6.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url(images/img-7.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url(images/img-8.jpg);">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<p class="text-center view-button animate-box"><a href="#" class="btn btn-primary btn-outline btn-lg">See More branding</a></p>
				</div>
			</div>
		</div> --}}
        <div>
				{{$slot}}
        </div>
		{{-- <div id="fh5co-product-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 prod text-center animate-box">
						<div class="product" style="background-image: url(images/img-9.jpg);">
							<a href="#" class="view">
								<i class="icon-plus"></i>
							</a>
						</div>
						<h3><a href="#">Bag</a></h3>
						<span class="price">$48</span>
					</div>
					<div class="col-md-4 prod text-center animate-box">
						<div class="product" style="background-image: url(images/img-11.jpg);">
							<a href="#" class="view">
								<i class="icon-plus"></i>
							</a>
						</div>
						<h3><a href="#">Arigato Shoes</a></h3>
						<span class="price">$109</span>
					</div>
					<div class="col-md-4 prod text-center animate-box">
						<div class="product" style="background-image: url(images/img-12.jpg);">
							<a href="#" class="view">
								<i class="icon-plus"></i>
							</a>
						</div>
						<h3><a href="#">New Balance Shoes</a></h3>
						<span class="price">$89</span>
					</div>
					<p class="text-center view-button animate-box"><a href="#" class="btn btn-primary btn-outline btn-lg">See More Product</a></p>
				</div>
			</div>
		</div> --}}
{{-- 
		<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
			<div class="fh5co-narrow-content animate-box">
				<div class="row" >
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="130" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Website</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="1450" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Branding</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="7497" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Product</span>
					</div>
				</div>
			</div>
		</div> --}}
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h3 class="section-title">Minimal</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
						</div>
						
						<div class="col-md-4 col-md-push-1">
							<h3 class="section-title">Our Services</h3>
							<ul>
								<li><a href="#">Videos</a></li>
								<li><a href="#">Photography</a></li>
								<li><a href="#">Editing Photos</a></li>
								<li><a href="#">Newsletter</a></li>
								<li><a href="#">API</a></li>
								<li><a href="#">FAQ / Contact</a></li>
							</ul>
						</div>

						<div class="col-md-4">
							<h3 class="section-title">Information</h3>
							<ul>
								<li><a href="#">Terms &amp; Condition</a></li>
								<li><a href="#">License</a></li>
								<li><a href="#">Privacy &amp; Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icon">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Minimal</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>
    @livewireScripts
	</body>
</html>

