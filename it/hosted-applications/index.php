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
page_header("CenturyLink Cloud | IT Leader | Hosted Applications");
?>

<div id="it-apps">
	<div class="hero hidden-xs">
		<div class="container wrapper">
			<div class="hero-container">
				<div class="hero-left">
					<img class="hero-label"
						src="<?php echo ROOT_URL;  ?>/images/i-hosted-label.png"
						alt="APPLICATIONS" />
					<div class="hero-left-content">
						<p class="headline">
							The apps you need, <br />without the worries you don't.
						</p>
						<h3 class="offer">
							Try CenturyLink Cloud Applications <br /> FREE for 30 Days.*
						</h3>
						<p class="call">
							<a href="tel:800.361.0833">Call 800.361.0833</a>
						</p>
					</div>
				</div>
				<div class="hero-right">
					<img class="icon"
						src="<?php echo ROOT_URL;  ?>/images/it-hosted-icon.png"
						alt="APPLICATIONS" />
				</div>
			</div>
		</div>
	</div>

	<div class="mobile-hero visible-xs">
		<div class="main-hero">
			<img src="<?php echo ROOT_URL;  ?>/images/mobile-ihosted-hero.png"
				alt="" />
		</div>
		<div class="container wrapper">
			<div class="padding-fix">
				<div class="mobile-hero-content">
					<p class="headline">The apps you need, without the worries you
						don't.</p>
					<h3 class="offer">Try CenturyLink Cloud Applications FREE for 30
						Days.*</h3>
					<p class="call">
						<a href="tel:800.361.0833">Call 800.361.0833</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="sticky-nav-wrap" class="sticky-nav">
		<div class="container wrapper">
			<div class="padding-fix">
				<a href="http://www.centurylink.com/small-business/" target="_blank"
					class="sticky-logo hidden-sm hidden-xs"> <object class="nav-logo"
						data="<?php echo ROOT_URL;  ?>/images/nav-logo.svg" width="141"
						height="30" type="image/svg+xml">
						<img src="<?php echo ROOT_URL;  ?>/images/nav-logo.png"
							alt="CENTURYLINK" width="141" height="30" />
					</object> </a>
				<ul id="sticky-nav">
					<li><a href="#ihosted">What We Offer</a></li>
					<li><a class="has-padding" href="#graph">How We Deliver</a></li>
					<li><a href="#ffb">OnBoarding</a></li>
				</ul>
				<div class="fix-center hidden-xs call">
					<a href="tel:800.361.0833">Call 800.361.0833</a>
				</div>
			</div>
		</div>

	</div>



	<div class="why-ctl">
		<div class="container wrapper">
			<div class="padding-fix">
				<p class="why-ctl-content">In today's business world, users need to
					access a wide variety of applications from a ton of different
					devices. Maintaining these applications, and supporting users, can
					eat up time and resources. That's where CenturyLink Hosted Apps can
					make a significant difference. We provide everything a business
					demands, from Microsoft essentials to email protection and
					archiving, as well as website management and security. Plus, you
					get comprehensive support from day one onboarding through
					day-to-day PC and network consultation from IT experts.</p>
				<div class="row ihosted-why-ctl">
					<div class="col-sm-4">
						<h3>Providers and Capabilities:</h3>
						<ul>
							<li>Leading providers like Microsoft, McAfee and Pinnacle Cart</li>
							<li>Automatic updates to current versions</li>
							<li>Network and software integration</li>
							<li>Full-feature sets</li>
							<li>Compatible with all major OS environments&#8212;works with
								your server and end-point devices</li>
							<li>All end-users access a single, consistent application
								platform at the office and on the road</li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h3>We deliver these apps:</h3>
						<ul>
							<li>With high availability</li>
							<li>In a secure environment</li>
							<li>In an integrated infrastructure</li>
							<li>Proactively managed</li>
							<li>With comprehensive administrative controls</li>
							<li>And we handle all upgrades and patches</li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h3>How we support:</h3>
						<ul>
							<li>Detailed migration processes</li>
							<li>Rapid onboarding of end-users</li>
							<li>Ongoing end-user and IT staff support</li>
							<li>Choice of support level to fit into your existing IT
								management model</li>
						</ul>
					</div>
				</div>
				<div class="block-seperator"></div>
				<hr class="block-hr" />
			</div>
		</div>
	</div>



	<div id="iapps">
		<?php page_inc("it/hosted-applications/i-hosted.php"); ?>
	</div>
</div>
<?php page_footer();?>