<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>CenturyLink</title>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/ie.css">
<![endif]-->

<script type="text/javascript"  src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript"  src="js/jquery.easing.min.js"></script>
<script type="text/javascript"  src="dist/js/bootstrap.min.js"></script>
<script type="text/javascript"  src="js/jquery.scrollUp.min.js"></script>
<script type="text/javascript"  src="js/jquery.nav.js"></script>
<script type="text/javascript"  src="js/jquery.scrollTo.js"></script>
<script type="text/javascript"  src="js/jquery.sticky.js"></script>
<script type="text/javascript"  src="js/readmore.min.js"></script>

<script type="text/javascript">
var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
if(isAndroid) {
	var winw = jQuery(window).width(); 
	jQuery('iframe').css('max-width',winw);
}
jQuery(document).ready(function($) {
	$.scrollUp({
		  scrollImg: true
	});
	$(".sticky-nav").sticky({
			topSpacing:0
	});
	$('#sticky-nav').onePageNav();
	$('#mobile-sticky-nav').onePageNav();
	console.log(window.location.pathname);
	
	//Check active page
	if(window.location.pathname === "/" || window.location.pathname === "/index.html" || window.location.pathname === "/index.php"){
		$('#mainnav li.home-link a').addClass('active');
	}else{
		$('#mainnav a#solutions-link').addClass('active');
	}

	$('.checkactive a').each(function() {
	    if ($(this).attr('href')  ===  window.location.pathname) {
	        $(this).addClass('active');
	      }
    });
	$('#mobilenav a').each(function() {
	    if ($(this).attr('href')  ===  window.location.pathname) {
	        $(this).addClass('active');
	      }
    });

	//Google analytics event trigger
	$('.twitter').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'twitter');
	});
	$('.facebook').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'facebook');
	});
	$('.google-plus').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'google plus');
	});
	$('.linkedin').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'linkedin');
	});
});
</script>

<!--[if IE]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.js"></script>
<![endif]-->

</head>
<body>
<?php #@include 'includes/develop_bar.php'?>
<div id="wrapper">
<header id="header" class="navbar" >
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row header-container">
				<div id="logo" class="col-md-7 col-sm-6">
					<a href="." title="Century Link"><img src="images/logo.svg" alt="Century Link Logo"/></a>
				</div>
				<div id="header-right" class="col-md-5 col-sm-6 hidden-xs">
					<?php include_once "global-nav.php";?>
				</div>
			</div>
		</div>
	</div>
	<?php include_once "mobile-nav.php";?>
</header>