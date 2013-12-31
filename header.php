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
<script type="text/javascript"  src="js/jquery.sidr.min.js"></script>

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

	// SLIDE MENU
	 $('#mobilenav-button').sidr({
	      name: 'mobilenav',
	      side: 'right'
    });
	$('#mobilenav-button').click(function(){
		 return false;
	});
	$('#mobile-sticky-nav-button').sidr({
	      name: 'mobile-sticky-nav',
	      side: 'right',
	      /*onOpen: function(){
	    	  if($('.sticky-nav').position().top !== 0){
		  			$('#mobile-sticky-nav-button').removeClass('button-position-open');
		  			$('#mobile-sticky-nav-button').removeClass('button-position-closed');
		  		}else{
		  			if(!$('#mobile-sticky-nav-button').hasClass('button-position-open')){
		  				$('#mobile-sticky-nav-button').removeClass('button-position-closed');
						$('#mobile-sticky-nav-button').addClass('button-position-open');
					}
		  		}
	      },
	      onClose: function(){
	    	  if($('.sticky-nav').position().top !== 0){
	    		  $('#mobile-sticky-nav-button').removeClass('button-position-open');
	    		  $('#mobile-sticky-nav-button').removeClass('button-position-closed');
	  			
		  		}else{
		  			if(!$('#mobile-sticky-nav-button').hasClass('button-position-closed')){
		  				$('#mobile-sticky-nav-button').removeClass('button-position-open');
						$('#mobile-sticky-nav-button').addClass('button-position-closed');
					}
		  		}
	      }*/
    });
	$('#mobile-sticky-nav-button').click(function(){
		 return false;
	});
    $(window).scroll(function(){
		if($('.sticky-nav').position().top === 0){
			$('.mobile-sticky-nav').removeClass('fix-position');
			$('#mobile-sticky-nav').removeClass('sidr-position');
			$('#mobile-sticky-nav-button').removeClass('button-position-open');
  			$('#mobile-sticky-nav-button').removeClass('button-position-closed');
			
		}else{
			if(!$('.mobile-sticky-nav').hasClass('fix-position')){
				$('.mobile-sticky-nav').addClass('fix-position');
			}
			if(!$('.mobile-sticky-nav').hasClass('sidr-position')){
				$('#mobile-sticky-nav').addClass('sidr-position');
			}
		}
    });
  
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
					<a href="." title="Century Link">
						<object data="images/logo.svg" width="141" height="30" type="image/svg+xml">
							<img  src="images/logo.png" alt="CENTURYLINK" width="141" height="30"/>
						</object>
					</a>
				</div>
				<div id="header-right" class="col-md-5 col-sm-6 hidden-xs">
					<?php include_once "global-nav.php";?>
				</div>
			</div>
		</div>
	</div>
	<?php include_once "mobile-nav.php";?>
</header>