<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MANAGED APPLICATIONS</title>
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
                	<li><a href="#contentpageapps" class="btscroll">APPLICATIONS SPECIFICS</a></li>
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
<div class="line-break sprite"></div>
<div id="contentpageapps">
	<div class="container" id="what-app-are-included-within-managed-office">
    	<div class="space38 hidden-xs"></div>
        <h2 class="text-center">What Applications are included within Managed Office?</h2>
        <p class="text-center fs14b">Managed Office comes with the software to run everything from email to data backup to security.</p>
        <div class="overlay-apps">
        	<div class="space40 hidden-xs"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="space38 hidden-xs"></div>
                    <h2>Our Messaging and Collaboration includes:</h2>
                    <p>
                    	<ul class="font-gray-mormal fs14b padleft15">
                        	<li>Microsoft<sup>&reg;</sup> Hosted Exchange email box with Outlook and 25GB of space per seat</li>
                        	<li>Microsoft<sup>&reg;</sup> SharePoint and 100GB storage per location</li>
                        	<li>Domain name transfer or registration for up to 5 domains</li>
                        </ul>
                    </p>
                   	<h2>Our Virtual Server includes:</h2>
                    <p>
                    	<ul class="font-gray-mormal fs14b padleft15">
                        	<li>Online data backup: 10GB per seat</li>
							<li>Fips 140-2 service certified with built-in data redundancy for disaster recovery</li>
                        </ul>
                    </p>
                    <h2>Our Managed Office Security includes:</h2>
                    <p>
                    	<ul class="font-gray-mormal fs14b padleft15">
                        	<li>Email Protection and Continuity: inbound email filtering, proactive attack detection, and policy enforcement</li>
							<li>Email Archiving: 1-year email retention</li>
							<li>Endpoint Protection: virus, spyware, spam, Web security, phishing, and desktop firewall protection</li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="hidden-xs">
                        <div class="space38 hidden-xs"></div>
                        <img src="images/picmaofap.png" alt="" class="img-responsive" />
                    </div>
                    <div class="visible-xs">
                        <img src="images/mobi/picmaofap.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="space40 hidden-xs"></div>
        </div>
        <div class="nextpage visible-lg">
            <a href="#set-up-an-apointment" class="btscroll">
                <i class="sprite down-arrow"></i>
                <span>SET UP AN APPOINTMENT</span>
            </a>
        </div>
        <div class="space20 visible-lg"></div>
	</div>
</div>
<div class="space100 visible-xs"></div>
<div class="space100 visible-xs"></div>
<div class="space100 visible-xs"></div>
<div class="line-break sprite"></div>
<div id="contactfooter">
	<div class="container" id="set-up-an-apointment">
    	<div class="row">
        	<div class="col-md-6">
            	<h2>Can we set up a meeting ?</h2>
                <p class="lead">
                	Just fill in a form, we'll give you a call back and set up a time to meet and talk about Managed Office.
                </p>
                <div class="sprite ico-calendar hidden-xs"></div>
            </div>
            <div class="col-md-6">
            	<form role="form" action="#" method="post" id="formcontact">
                	<span class="required">* All fields require</span>
                	<div class="form-group">
						<label for="txtfirstname">First Name</label>
                        <input type="text" id="txtfirstname" class="form-control" name="txtfirstname" value="" data-rule-required="true" data-msg-required="Please enter your first name"  placeholder="Enter First Name" />
                    </div>
                    <div class="form-group">
                    	<label for="txtlastname">Last Name</label>
                        <input type="text" id="txtlastname" class="form-control" name="txtlastname" value="" data-rule-required="true" data-msg-required="Please enter your last name" placeholder="Enter Last Name" />
                    </div>
                    <div class="form-group">
                    	<label for="txtemail">Work Email</label>
                        <input type="email" id="txtemail" class="form-control" name="email" value="" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address"  placeholder="Enter Work Email" />
                    </div>
                    <div class="form-group">
                    	<label for="txtphone">Phone</label>
                        <input type="text" id="txtphone" class="form-control" name="txtphone" data-rule-required="true" data-msg-required="Please enter your email phone" value=""  placeholder="Enter Phone" />
                    </div>
                    <div class="form-group">
                    	<label for="txtcompany">Company/Organization</label>
                        <input type="text" id="txtcompany" class="form-control" name="txtcompany" data-rule-required="true" data-msg-required="Please enter your company or organization" value=""  placeholder="Enter Company/Organization" />
                    </div>
                    <div class="form-group">
                    	<label for="txtzipcode">Zip/Postal Code</label>
                        <input type="text" id="txtzipcode" class="form-control" name="txtzipcode"  data-rule-required="true" data-msg-required="Please enter your zip code" value=""  placeholder="Enter Zip/Postal Code" />
                    </div>
                    <div class="form-group">
                    	<label for="txtquestion">Any question before we meet?</label>
                        <textarea id="txtquestion" name="txtquestion" class="form-control" placeholder="Any question before we meet?"></textarea>
                    </div>
                    <button type="submit" class="btnsubmit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN LivePerson Button Code -->
<div id="lpButDivID-1387813773826" class="icolivechat hidden-xs"></div>
<script type="text/javascript" charset="UTF-8" src="https://sales.liveperson.net/hc/56948775/?cmd=mTagRepstate&amp;site=56948775&amp;buttonID=43&amp;divID=lpButDivID-1387813773826&amp;bt=1&amp;c=1"></script>
<!-- END LivePerson Button code -->
<?php
	include_once( './contactform.php' );
	include_once( './footer.php' );
?>