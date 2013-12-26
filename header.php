<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CenturyLink</title>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
jQuery(document).ready(function($) {
	$.scrollUp({
		  scrollImg: true
	});
	$(".sticky-nav").sticky({
			topSpacing:0,
			getWidthFrom: $('body')
		});
	$('#sticky-nav').onePageNav();
	$('#mobile-sticky-nav').onePageNav();
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
<?php @include 'includes/develop_bar.php'?>
<div id="wrapper">
<header id="header" class="navbar" >
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row header-container">
				<div id="logo" class="col-md-7 col-sm-6">
					<a href="" title="Century Link"><img src="images/logo.png"/></a>
				</div>
				<div id="header-right" class="col-md-5 col-sm-6 hidden-xs">
					<ul id="mainnav">
						<li class="current"><a href="/" title="">Home</a></li>
						<li id="globalnav-container">
							<a href="javascript:void(0)">Our Solutions</a>
							<span class="arrow-bottom"></span>
							<ul class="globalnav">
								<li>
									<ul>
										<li>Bussiness Owner</li>
										<li><a href="bussiness.html" title="">Hosted Applications</a></li>
										<li><a href="bussiness-databackup.html" title="">Data Backup</a></li>
									</ul>
								</li>
								<li>
									<ul>
										<li>IT Leader</li>
										<li><a href="itleader.html" title="">Hosted Applications</a></li>
										<li><a href="itleader-databackup.html" title="">Data Backup</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="social-icon">
							<a class="twitter" href="https://twitter.com/CenturyLinkBiz" title="Follow us on Twitter">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
							</span>
							</a>
							<a class="facebook" href="https://www.facebook.com/CenturyLinkBusiness" title="Follow us on Facebook">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
							</a>
							<a class="google-plus" href="https://plus.google.com/u/0/117080893855557903730/posts" title="Follow us on Google Plus">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</span>
							</a>
							<a class="linkedin" href="http://www.linkedin.com/company/1434913?trk=tyah" title="Follow us on Linkedin">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-global-nav visible-xs">
		<ul id="mobilenav" class="collapse">
			<li>
				<ul>
					<li>Bussiness Owner</li>
					<li><a href="bussiness.html" title="">Hosted Applications</a></li>
					<li><a href="bussiness-databackup.html" title="">Data Backup</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li>IT Leader</li>
					<li><a href="itleader.html" title="">Hosted Applications</a></li>
					<li><a href="itleader-databackup.html" title="">Data Backup</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li>View our Blog</li>
					<li class="social-icon">
						<a class="twitter" href="https://twitter.com/CenturyLinkBiz" title="Follow us on Twitter">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
							</span>
							</a>
							<a class="facebook" href="https://www.facebook.com/CenturyLinkBusiness" title="Follow us on Facebook">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
							</a>
							<a class="google-plus" href="https://plus.google.com/u/0/117080893855557903730/posts" title="Follow us on Google Plus">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</span>
							</a>
							<a class="linkedin" href="http://www.linkedin.com/company/1434913?trk=tyah" title="Follow us on Linkedin">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
								</span>
						</a>
					</li>
				</ul>
			</li>
		
		</ul>
		<button type="button" class="navbar-toggle" data-toggle="collapse" href="#mobilenav">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
</header>