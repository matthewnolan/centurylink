<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<title><?php  echo $title;	?></title>
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL;  ?>/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL;  ?>/dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL;  ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL;  ?>/css/fontello.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL;  ?>/css/style.css">

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL;  ?>/css/ie.css">
<![endif]-->

<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/jquery.easing.min.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/dist/js/bootstrap.min.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/jquery.nav.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/jquery.scrollTo.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/jquery.sticky.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/readmore.min.js"></script>
<script type="text/javascript"  src="<?php echo ROOT_URL;  ?>/js/jquery.sidr.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {

	//ANDROID IFRAME
	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
	if(isAndroid) {
		var container = $('.container')[0];
		var winw = $(container).width();
		$('iframe').css('max-width',winw - 40);
		$('iframe').css('height','auto');
	}
	

	var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod|Android)/g) ? true : false );
	if (!iOS){
		$(".call a").attr("href", "javascript:void(0)");
	}
	
	//BACKTOTOP
	$.scrollUp({
		  scrollImg: true
	});
	$('a#scrollUp').click(function(){
		setTimeout(function(){
			$('#sticky-nav li.current').removeClass('current');
		},300);
	});

	//STICKYNAV
	$("#sticky-nav-wrap").sticky({
			topSpacing:0
	});
	$('#sticky-nav').onePageNav();

	// SLIDE MENU
	 $('#mobilenav-button').sidr({
	      name: 'mobilenav',
	      side: 'right'
    });
	$('#mobilenav-button').click(function(){
		 return false;
	});
	$(window).resize(function(){
		$.sidr('close', 'mobilenav');
		var winw = $(window).width();
		$('html').attr('style','width:'+ winw);
		$('body').attr('style','width:'+ winw);
	});
	
	//Check active page
	if(window.location.pathname === "/" || window.location.pathname === "/index.html" || window.location.pathname === "/index.php"){
		$('#mainnav li.home-link a').addClass('active');
		$('#mobilenav li.home-link a').addClass('active');
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
	<script src="<?php echo ROOT_URL;  ?>/js/html5shiv.js"></script>
	<script src="<?php echo ROOT_URL;  ?>/js/respond.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('iframe').each(function(){
		        var url = $(this).attr("src");
		        $(this).attr("src",url+"?wmode=transparent");
		    });
	    });
	</script>
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
					<a href="<?php echo ROOT_URL;  ?>" title="Century Link">
						<object data="<?php echo ROOT_URL;  ?>/images/logo.svg" width="141" height="30" type="image/svg+xml">
							<img  src="<?php echo ROOT_URL;  ?>/images/logo.png" alt="CENTURYLINK" width="141" height="30"/>
						</object>
					</a>
				</div>
				<div id="header-right" class="col-md-5 col-sm-6 hidden-xs">
					<?php page_global_nav();?>
				</div>
			</div>
		</div>
		<?php page_inc("includes/mobile-nav.php");?>
	</div>
	
</header>