<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<html lang="en">
			
			<!--Let browser know website is optimized for mobile-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<link rel="icon" href="images/favicon.ico" type="image/ico" />
    		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    		<link rel="manifest" href="manifest.json">
    		<script>
    			 //if browser support service worker
        		if('serviceWorker' in navigator) {
          		navigator.serviceWorker.register('sw.js');
        	};
    		</script>
			<title>Appointify - An usefull guidance to find doctors</title>
			<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
			<!-- Compiled and minified CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
			<!-- JQuery CDN -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<!-- Compiled and minified JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
			<!--Import Google Icon Font-->
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<script src="https://kit.fontawesome.com/0aba72050a.js" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/dark.css">
		</head>
		<body>
			<div class="loader_bg">
				<div class="loader"></div>
			</div>
			<!-- Dropdown Structure -->
			<ul id="dropdown1" class="dropdown-content">
				<li><a href="login.php">Login</a></li>
				<li class="divider"></li>
				<li><a href="reg.php">Join</a></li>
				<li class="divider"></li>
				<li><a href="#!">Contact</a></li>
				<li><a class="dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i> Toggle Dark Mode</a></li>
			</ul>
			
			<nav class="purple lighten-2">
				<div class="nav-wrapper container">
					<!-- <a href="index.html" class="brand-logo left"><img class="responsive-img" id="logo" src="images/favicon.ico" /></a> -->
					<a href="index.php" class="brand-logo"><img class="responsive-img" id="logo" src="images/favicon.ico" /></a>
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Doctor</a></li>
						<li><a href="#l">Tell us problems</a></li>
						<li><a href="reg.php">Join</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="#">Contact</a></li>
						<li><a class="dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i> Toggle Dark Mode</a></li>
						
					</ul>
				</div>
			</nav>
			<ul class="sidenav" id="mobile-demo">
				<li><a href="#">Home</a></li>
				<li><a href="#">Doctor</a></li>
				<li><a href="#l">Tell us problems</a></li>
				<!-- Dropdown Trigger -->
				<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">More<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
			<!--  Carousel start -->
			<div class="carousel carousel-slider">
				<a class="carousel-item" href="#one!"><img class="caro" src="images/1.svg"></a>
				<a class="carousel-item" href="#two!"><img class="caro" src="images/2.svg"></a>
				<a class="carousel-item" href="#three!"><img class="caro" src="images/3.svg"></a>
				<a class="carousel-item" href="#four!"><img class="caro" src="images/covid.svg"></a>
			</div>
			<div class="carousel-fixed-item center">
				<a class="waves-effect waves-light btn">More Info
				<i class="material-icons right">send</i></a>
			</div>
			<!-- Carousel end -->
			<!-- Floating Action Menu -->
			<div class="fixed-action-btn">
				<a class="btn-floating btn-large red">
					<i class="large material-icons">coronavirus</i>
				</a>
				<ul>
					<li><a class="btn-floating light-blue darken-4" href="https://www.facebook.com/MCETclg/"><i class="fab fa-facebook-f"></i></a></li>
					<li><a class="btn-floating red accent-2"><i class="fab fa-instagram"></i></a></li>
					<li><a class="btn-floating light-blue"><i class="fab fa-twitter"></i></a></li>
					<li><a class="btn-floating blue-grey darken-4"><i class="fab fa-google-play"></i></a></li>
				</ul>
			</div>
			<section>
				<h2 class="center-align">About Us</h2>
				<div class="row">
					<div class="col s4 m4 l4 offset-l4"> <hr></div>
				</div>
				<div class="row">
					<div class="col m6 s12">
						<img src="images/appointify.svg" class="responsive-img">
					</div>
					<div class="col m6 s12">
						<h4>What is Appointify?</h4>
						<p>With Appointify, you can book doctors from home and can consult with doctors. Especially this app helps you to find doctors for your problems during this COVID-19 Pandemic. For native clients, like Android and iOS applications, a library is available that provides the same functionality. The WebRTC project is open-source and supported by Apple, Google, Microsoft and Mozilla, amongst others. This page is maintained by the Appointify team.
						</p>
						<a href="#" class="btn waves-effect waves-light blue white-text">Know More</a>
					</div>
				</div>
			</section>
			<!-- Our Services -->
			<section>
				<h2 class="center-align">Our Services</h2>
				<div class="row">
					<div class="col s4 m4 l4 offset-l4"> <hr></div>
				</div>
				<div class="row">
					<div class="col m4 l4 s12">
						<div class="card">
							<div class="card-image">
								<img src="images/doctor.svg" class="responsive-img">
								<span class="card-title red">COVID-19 Alert</span>
								<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
							</div>
							<div class="card-content">
								<p>If you think you have been exposed to novel coronavirus (COVID-19), and have developed any symptoms (cough, fever or difficulty breathing), call the Govt. of India helpline 1075 or the state helpline numbers for assistance.</p>
							</div>
							<div class="card-action">
								<a href="#">This is a link</a>
							</div>
						</div>
					</div>
					<div class="col m4 l4 s12">
						<div class="card">
							<div class="card-image">
								<img src="images/doctor2.svg" class="responsive-img">
								<span class="card-title red">COVID-19 Alert</span>
								<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
							</div>
							<div class="card-content">
								<p>If you think you have been exposed to novel coronavirus (COVID-19), and have developed any symptoms (cough, fever or difficulty breathing), call the Govt. of India helpline 1075 or the state helpline numbers for assistance.</p>
							</div>
							<div class="card-action">
								<a href="#">This is a link</a>
							</div>
						</div>
					</div>
					<div class="col m4 l4 s12">
						<div class="card">
							<div class="card-image">
								<img src="images/doctor.svg" class="responsive-img">
								<span class="card-title red">COVID-19 Alert</span>
								<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
							</div>
							<div class="card-content">
								<p>If you think you have been exposed to novel coronavirus (COVID-19), and have developed any symptoms (cough, fever or difficulty breathing), call the Govt. of India helpline 1075 or the state helpline numbers for assistance.</p>
							</div>
							<div class="card-action">
								<a href="#">This is a link</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer -->
			<footer class="page-footer">
					<div class="container">
						<div class="row">
							<div class="col l6 s12">
								<h5 class="white-text">Stay Safe, Stay Home</h5>
								<p class="grey-text text-lighten-4">Our goals to solve your medicaton problem and faster treatment.</p>
							</div>
							<div class="col l4 offset-l2 s12">
								<h5 class="white-text">Links</h5>
								<ul>
									<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
									<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
									<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
									<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="footer-copyright">
						<div class="container">
							Copyright © 2019, Appointify. All rights reserved.
							<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
						</div>
					</div>
				</footer>

			<script src="js/dark.js"></script>

			<script>
				$(document).ready(function(){
					$('.sidenav').sidenav();
					});
				$.each($('.dropdown-trigger'), function(index, value) {
				$(value).dropdown();
					});

				$(document).ready(function(){
					$('.carousel').carousel({
						fullWidth: true,
						indicators: true
					});

					setInterval(function(){
						$('.carousel').carousel('next');
					}, 2500);
				});

				$(document).ready(function(){
				$('.fixed-action-btn').floatingActionButton();
				});
			</script>
			<script>
				setTimeout(function(){
					$('.loader_bg').fadeToggle();
				}, 1500);
			</script>
		</body>
	</html>