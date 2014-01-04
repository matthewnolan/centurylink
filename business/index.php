<?php
	page_header();
?>

<div id="business">
	<div class="hero hidden-xs">
	<div class="container wrapper">
		<div class="hero-container">
			<div class="hero-left">
				<img class="hero-label" src="<?php echo ROOT_URL;  ?>/images/business-label.jpg" alt="business OWNER"/>
				<div class="hero-left-content">
					<p class="headline">Access big business <br/>tools, without the <br/> big business headaches.</p>
					<h3 class="offer">Try CenturyLink Cloud FREE <br/> for 30 Days.* </h3>
					<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
				</div>
			</div>
			<div class="hero-right">
				<img class="people" src="<?php echo ROOT_URL;  ?>/images/woman.png" alt="business OWNER"/>
				<img class="icon" src="<?php echo ROOT_URL;  ?>/images/b-icon.png" alt="business OWNER"/>
			</div>
		</div>
	</div>
</div>

<div class="mobile-hero visible-xs">
	<div class="main-hero">
		<img src="<?php echo ROOT_URL;  ?>/images/mobile-business-hero.png" alt=""/>
	</div>
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="mobile-hero-content">
				<p class="headline">Access big business tools, without the big business headaches.</p>
				<h3 class="offer">Try CenturyLink Cloud FREE  for 30 Days.* </h3>
				<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
			</div>
		</div>
	</div>
</div>

<div class="sticky-nav">
	<div class="container wrapper">
		<div class="padding-fix">
			<a href="<?php echo ROOT_URL;?>" class="sticky-logo hidden-sm hidden-xs">
				<object class="nav-logo" data="<?php echo ROOT_URL;  ?>/images/nav-logo.svg" width="141" height="30" type="image/svg+xml">
					<img  src="<?php echo ROOT_URL;  ?>/images/nav-logo.png" alt="CENTURYLINK" width="141" height="30"/>
				</object>
			</a>
			<ul id="sticky-nav">
				<li><a href="#bhosted">Hosted Applications</a></li>
				<li><a href="#bhdb">Data Backup</a></li>
			</ul>
			<div class="fix-center hidden-sm hidden-xs call"><a href="tel:800.361.0833">Call 800.361.0833</a></div>
		</div>
	</div>
	
</div>



<div class="why-ctl">
	<div class="container wrapper">
	<div class="padding-fix">
		<p class="why-ctl-content">
			Just because yours business doesn't have 1000 employees doesn't mean<br/>
			you can't perform like you do. Centurylink provides the lasted cloud-based software<br/>
			and solutions to help you do just that easily and cost effectively.<br/>
			The only thing you will be missing is the headache.
		</p>
		<div class="box">
			<h3 class="offer">Start your Free 30-days trial today.</h3>
			<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
		</div>
	</div>
	</div>
</div>
	
			
	
	<div id="bapps">
		<?php page_inc("business/b-owner.php"); ?>
	</div>
</div>
<?php page_footer();?>
