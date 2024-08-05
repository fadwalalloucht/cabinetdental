<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Dentist</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:
	ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900
	;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	{{--
	<link rel="stylesheet" href="css/font-awesome.min.css"> --}}
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">

	<style>
		 body {
            margin: 0;
            font-family: Poppins;
        }

        .info-bar {
            background-color: #4A919E;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            font-size: 14px;
				font-family: "Yeseva One";
        }

        .info-bar .left-section,
        .info-bar .right-section {
            display: flex;
            align-items: center;
        }

        .info-bar .left-section i,
        .info-bar .right-section i {
            margin-right: 8px;
        }

        .info-bar .right-section a {
            color: #d4af37;
            margin-left: 15px;
            text-decoration: none;
            font-size: 28px;
        }

        .info-bar .right-section a:hover {
            color: #fff;
        }

        .social-icon,
        .icons {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            /* width: 35px; */
            /* height: 35px; */
            border-radius: 50%;
            background-color: transparent;
            color: #000;
				/* border-width: 1px 1px 1px 1px */
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s, border 0.3s;
            border: 2px solid #d4af37; /* Yellow border
            font-size: 24px; Adjusted to fit icon size */
        }
        .social-icon:hover,
        .icons:hover {
            background-color: #d4af37; /* Yellow background on hover */
            color: #000; /* Icon color on hover */
        }
    </style>
	</style>

</head>


<body>
	<header id="header" id="home">

		<div class="info-bar">
			<div class="left-section">
				<span>Vous avez des questions ?</span>
				<i class="fa fa-phone" style="margin-left: 20px;"></i>
				<span>05.39.35.67.84</span>
				<i class="lnr lnr-map-marker" style="margin-left: 20px;"></i>
				<span> Plaza Toro Rue Regayae Quartier Drawa (en face de la pharmacie Place des Arènes), Tanger</span>
			</div>
			<div class="right-section">
				<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-f"></i></a>
				<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-google"></i></a>
			</div>
		</div>


		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
						<a href="index.html"><img src="img/size.jpg" alt="" title="" /></a>
						{{-- <a href="index.html"><img src="img/logocabinet.png" alt="" title="" /></a> --}}

					</div>


					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<a class="social-icon fa fa-instagram" href="#" style="font-size: 24px;"></a>
						<a class="social-icon fa fa-facebook" href="#" style="font-size: 24px;"></a>
						<a class="social-icon fa fa-google" href="#" style="font-size: 24px;"></a>
						<a class="icons" href="https://wa.me/212666600755">
							 <span class="lnr lnr-phone-handset"></span>
						</a>
						<a class="icons" href="mailto:support@colorlib.com">
							 <span class="lnr lnr-envelope"></span>
						</a>
				  </div>
			 </div>
		</div>
				  

				</div>
			</div>
		</div>






		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="{{ route('home') }}">Acceuil</a></li>
						<li><a href="{{route('about')}}"> À propos</a></li>
						<li><a href="{{route('service')}}">Services</a></li>
						<li><a href="opening-hour.html">Heures d'ouverture</a></li>
						<li><a href="{{route('contact')}}">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>