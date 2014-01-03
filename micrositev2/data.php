<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CenturyLink Microsite</title>
    <meta name="keywords" content="Keywords Site" />
    <meta name="description" content="Description Site" />
    <meta name="robots" content="follow,index" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <![endif]-->
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
	include_once( './header.php' );
?>
<div id="div-navsticky">
	<div class="container">
    	<div class="row">
        	<div class="col-md-2">
            	<div class="hidden-xs pull-left">
            		<a href="index.php" title="Century Link" id="logo-sticky" class="sprite">Century Link</a>
                </div>
            </div>
            <div class="col-xs-12 col-md-8">
                <ul class="nav nav-pills">
                	<li><a href="#contentpagedata" class="btscroll">DATA SPECIFICS</a></li>
                </ul>
            </div>
            <div class="visible-lg">
                <div class="col-md-2 nopadding">
                	<div class="divcallto">
                            <a href="callto:123.456.7890">
                            	<i class="fa fa-phone fa-lg font-gray-mormal"></i>
                            	123.456.7890
                            </a>
                    </div>
                    <div class="divschedule">
                        	<a href="#set-up-an-apointment" class="btscroll">
                            	<i class="fa fa-calendar fa-lg font-gray-mormal"></i>
                            	Schedule a meeting
                            </a>
                    </div>   
                 </div>
            </div>
         </div>
    </div>
</div>
<!-- BEGIN LivePerson Button Code -->
<div id="lpButDivID-1387813752610" class="icolivechat hidden-xs"></div>
<script type="text/javascript" charset="UTF-8" src="https://sales.liveperson.net/hc/56948775/?cmd=mTagRepstate&amp;site=56948775&amp;buttonID=43&amp;divID=lpButDivID-1387813752610&amp;bt=1&amp;c=1"></script>
<!-- END LivePerson Button code -->
<?php
	include_once( './contactform.php' );
	include_once( './footer.php' );
?>