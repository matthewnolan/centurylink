<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Insert a very descriptive title here.</title>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$('#div_navsticky').sticky();
});
</script>
</head>
<body>
<div id="container">
	<header id="header">
		<div class="content-wrapper">
			<div class="row">
			    <div class="col-md-3">
			        <a href="" title="Century Link"><img width="168" height="33" src="images/logo.png"/></a>
			    </div>
			  
			    <div class="col-md-4" style="padding-top:10px;">
			        <span class="span-menu-normal"><b>HOME</b></span>
			        <span><b>PRODUCT COMPONENTS</b></span>
			    </div>
			  
			    <div class="col-md-3" style="margin-top:-10px;">
		            <div>
		                <img id="img_phone_header" src="images/phone_icon.png"/> <b>123.456.7890</b>
		            </div>
		            <div>
		                <img id="img_schedule_header" src="images/schedule_icon.png"/> <b>SCHEDULE A MEETING</b>
		            </div>
			    </div>
			  
			    <div class="col-md-2" id="div_social_header">
			        <a href=""><span class="fa-stack">
					    <i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
				    </span></a>
			      
			        <a href=""><span class="fa-stack">
					    <i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
				    </span></a>
				  
				    <a href=""><span class="fa-stack">
					    <i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
				    </span></a>
				  
				    <a href=""><span class="fa-stack">
					    <i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
				    </span></a>
			    </div>
			</div>
			<?php include_once "welcome.php";?>
		</div>
	</header>