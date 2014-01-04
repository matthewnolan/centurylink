<?php
	#############
	# THIS PART IS PAGE LOADER
	#############
	
	include_once dirname(__FILE__) . "/../../config.php";
	define_root_url(__FILE__);
	
	#############
	# END PAGE LOADER
	#############
?>


<?php
	page_header("CenturyLink Cloud | Business Owner | Hosted Applications");
?>

<div id="business-apps">
	<div class="hero hidden-xs">
	<div class="container wrapper">
		<div class="hero-container">
			<div class="hero-left">
				<img class="hero-label" src="<?php echo ROOT_URL;  ?>/images/new-business-label.jpg" alt="APPLICATIONS"/>
				<div class="hero-left-content">
					<p class="headline">In business, bigger isn't better.<br/> Better is better.</p>
					<h3 class="offer">Try CenturyLink Cloud Applications <br/>FREE for 30 Days.*</h3>
					<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
				</div>
			</div>
			<div class="hero-right">
				<img class="icon" src="<?php echo ROOT_URL;  ?>/images/new-business-icon.png" alt="APPLICATIONS"/>
			</div>
		</div>
	</div>
</div>

<div class="mobile-hero visible-xs">
	<div class="main-hero">
		<img src="<?php echo ROOT_URL;  ?>/images/new-mobile-business-hero.png" alt=""/>
	</div>
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="mobile-hero-content">
				<p class="headline">In business, bigger isn't better.<br/> Better is better.</p>
				<h3 class="offer">Try CenturyLink Cloud Applications FREE  for 30 Days.* </h3>
				<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
			</div>
		</div>
	</div>
</div>

<div id="sticky-nav-wrap" class="sticky-nav">
	<div class="container wrapper">
		<div class="padding-fix">
			<a href="http://www.centurylink.com/small-business/" target="_blank" class="sticky-logo hidden-sm hidden-xs">
				<object class="nav-logo" data="<?php echo ROOT_URL;  ?>/images/nav-logo.svg" width="141" height="30" type="image/svg+xml">
					<img  src="<?php echo ROOT_URL;  ?>/images/nav-logo.png" alt="CENTURYLINK" width="141" height="30"/>
				</object>
			</a>
			<ul class="multi" id="sticky-nav">
				<li><a href="#email">Email & Collaboration</a></li>
				<li><a href="#safe">Security</a></li>
				<li><a href="#webmanagement">Web Management</a></li>
				<li><a href="#ffb">Onboading</a></li>
			</ul>
			<div class="fix-center hidden-sm hidden-xs call"><a href="tel:800.361.0833">Call 800.361.0833</a></div>
		</div>
	</div>
	
</div>



<div class="why-ctl">
	<div class="container wrapper">
	<div class="padding-fix">
		<p class="why-ctl-content">
			You and your employees are moving your business in one direction: forward. But if the team is going to be as effective as you want, you ll need the latest tools of the trade. Hardworking hosted applications that not only allow employees to communicate and collaborate, but also help protect, support and grow your business.
		</p>
		<p class="why-ctl-content">
			Think of it this way, the more effective your team is, the greater the impact on the other<br/> driving force in your business&#8212;your customers.
		</p>
		<p class="why-ctl-content">
			We've packaged our solutions to help <strong>protect</strong>, <strong>support</strong> and <strong>grow</strong> your business. <br/>
			<strong>Call now</strong>&#8212;<strong><span class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></span></strong>&#8212;and find out what we can do for you.
			</p>
	</div>
	</div>
</div>
	
			
	
	<div id="bhosted">
		<?php page_inc("business/hosted-applications/b-hosted.php"); ?>
	</div>
</div>
<?php page_footer();?>
