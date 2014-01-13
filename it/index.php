<?php
#############
# THIS PART IS PAGE LOADER
#############

include_once dirname(__FILE__) . "/../config.php";
define_root_url(__FILE__);

#############
# END PAGE LOADER
#############
?>

<?php
page_header("CenturyLink Cloud | IT Leader");
?>
<div id="it">

	<div class="hero hidden-xs">
		<div class="container wrapper">
			<div class="hero-container">
				<div class="hero-left">
					<img class="hero-label"
						src="<?php echo ROOT_URL;  ?>/images/it-label.jpg" alt="IT LEADER" />
					<div class="hero-left-content">
						<p class="headline">
							Instead of taking<br /> one thing off your plate, <br />how about
							two or three?
						</p>
						<h3 class="offer">
							Try CenturyLink Cloud FREE for<br /> 30 Days.*
						</h3>
						<p class="call">
							<a href="tel:800.361.0833">Call 800.361.0833</a>
						</p>
					</div>
				</div>
				<div class="hero-right">
					<img class="people" src="<?php echo ROOT_URL;  ?>/images/itguy.png"
						alt="IT LEADER" /> <img class="icon"
						src="<?php echo ROOT_URL;  ?>/images/iticon1.png" alt="IT LEADER" />
					<img class="icon1"
						src="<?php echo ROOT_URL;  ?>/images/iticon2.png" alt="IT LEADER" />
					<img class="icon2"
						src="<?php echo ROOT_URL;  ?>/images/iticon3.png" alt="IT LEADER" />
				</div>
			</div>
		</div>
	</div>

	<div class="mobile-hero visible-xs">
		<div class="main-hero">
			<img src="<?php echo ROOT_URL;  ?>/images/mobile-it-hero.png" alt="" />
		</div>
		<div class="container wrapper">
			<div class="padding-fix">
				<div class="mobile-hero-content">
					<p class="headline">Instead of taking one thing off your plate, how
						about two or three?</p>
					<h3 class="offer">Try CenturyLink Cloud FREE for 30 Days.*</h3>
					<p class="call">
						<a href="tel:800.361.0833">Call 800.361.0833</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="sticky-nav-wrap" class="sticky-nav" data-spy="affix">
		<div class="container wrapper">
			<div class="padding-fix">
				<a href="http://www.centurylink.com/small-business/" target="_blank"
					class="sticky-logo hidden-sm hidden-xs"> <object class="nav-logo"
						data="<?php echo ROOT_URL;  ?>/images/nav-logo.svg" width="141"
						height="30" type="image/svg+xml">
						<img src="<?php echo ROOT_URL;  ?>/images/nav-logo.png"
							alt="CENTURYLINK" width="141" height="30" />
					</object> </a>
				<ul id="sticky-nav" class="nav">
					<li><a href="#ihosted">Hosted Applications</a></li>
					<li><a href="#ihdb">Data Backup</a></li>
				</ul>
				<div class="fix-center call">
					<a href="tel:800.361.0833">Call 800.361.0833</a>
				</div>
			</div>
		</div>
	</div>

	<div class="why-ctl">
		<div class="container wrapper">
			<div class="padding-fix">
				<p class="why-ctl-content">
					The way we see it, the greatest gift is technology that actually
					lightens your load. That's why our Data Backup and Hosted
					Apps increase accessibility and security, and decrease IT
					workload at the same time. If you'd like, take advantage of
					our offer and see what a lighter load feels like.
				</p>
				<div class="box">
					<h3 class="offer">Start your Free 30-day trial today.</h3>
					<p class="call">
						<a href="tel:800.361.0833">Call 800.361.0833</a>
					</p>
				</div>
				<div class="why-ctl-seperator"></div>
				<hr class="block-hr" />
			</div>
		</div>
	</div>
	
	<div id="iapps">
		<?php page_inc("it/i-leader.php"); ?>
	</div>
</div>
<?php page_footer();?>