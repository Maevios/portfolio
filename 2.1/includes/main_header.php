<!DOCTYPE HTML>
<head>
	<title>The Colosseum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link type="image/x-icon" rel="icon" href="favicon.ico" />
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link type="text/css" rel="stylesheet" href="css/slider.css"/>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/jquery.tubular.1.0.js"></script>
	<script type="text/javascript" src="scripts/jssor.slider.min.js"></script>
	<script>
		$(function() {
			$(window).scroll(function() {
				var scroll = $(window).scrollTop();
				if (scroll >= 50) {
					$("header").addClass('smaller');
				} else {
					$("header").removeClass("smaller");
				}
			});
		});
	</script>
   <script>
		$(document).ready(function(){
			
			//Check to see if the window is top if not then display button
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('#to-top').fadeIn();
				} else {
					$('#to-top').fadeOut();
				}
			});
			
			//Click event to scroll to top
			$('#to-top').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
			
		});
		
		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html, body').animate({
				  scrollTop: target.offset().top - 75
				}, 1000);
				return false;
			  }
			}
		  });
		});
	</script>
</head>
<body>
<div id="wrapper">
