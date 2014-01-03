<!DOCTYPE html>
<html lang="en">
<?php
	include_once( './includes/head.php' );
?>
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
                            <a href="callto:800.361.0833">
                            	<i class="fa fa-phone fa-lg font-gray-mormal"></i>
                            	800.361.0833
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
<!-- BEGIN LivePerson Button Code -->
<div id="lpButDivID-1387813773826" class="icolivechat hidden-xs"></div>
<script type="text/javascript" charset="UTF-8" src="https://sales.liveperson.net/hc/56948775/?cmd=mTagRepstate&amp;site=56948775&amp;buttonID=43&amp;divID=lpButDivID-1387813773826&amp;bt=1&amp;c=1"></script>
<!-- END LivePerson Button code -->
<?php
	include_once( './contactform.php' );
	include_once( './footer.php' );
?>