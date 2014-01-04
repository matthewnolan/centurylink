<?php
	page_header();
?>

<div id="it-db">
	<div class="hero hidden-xs">
	<div class="container wrapper">
		<div class="hero-container">
			<div class="hero-left">
				<img class="hero-label" src="<?php echo ROOT_URL;  ?>/images/itdb-label.jpg" alt="DATA BACKUP"/>
				<div class="hero-left-content">
					<p class="headline">Restore company data <br/>quicker than management <br/>can make a decision.</p>
					<h3 class="offer">Try CenturyLink Cloud FREE <br/> for 30 Days.* </h3>
					<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
				</div>
			</div>
			<div class="hero-right">
				<img class="icon" src="<?php echo ROOT_URL;  ?>/images/itdb-icon.png" alt="DATA BACKUP"/>
			</div>
		</div>
	</div>
</div>

<div class="mobile-hero visible-xs">
	<div class="main-hero">
		<img src="<?php echo ROOT_URL;  ?>/images/mobile-it-db-hero.png" alt=""/>
	</div>
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="mobile-hero-content">
				<p class="headline">Restore company data quicker than management can make a decision.</p>
				<h3 class="offer">Try CenturyLink Cloud FREE  for 30 Days.* </h3>
				<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
			</div>
		</div>
	</div>
</div>

<div class="sticky-nav">
	<div class="container wrapper">
		<div class="padding-fix">
			<a href="<?php echo ROOT_URL?>" class="sticky-logo hidden-sm hidden-xs">
				<object class="nav-logo" data="<?php echo ROOT_URL;  ?>/images/nav-logo.svg" width="141" height="30" type="image/svg+xml">
					<img  src="<?php echo ROOT_URL;  ?>/images/nav-logo.png" alt="CENTURYLINK" width="141" height="30"/>
				</object>
			</a>
			<ul class="multi" id="sticky-nav">
				<li><a href="#safe">Secure & Available</a></li>
				<li><a class="short" href="#tco">TCO</a></li>
				<li><a href="#console">Management Console</a></li>
				<li><a href="#ffb">FastForward on Boarding&#8480;</a></li>
			</ul>
			<div class="fix-center hidden-sm hidden-xs call"><a href="tel:800.361.0833">Call 800.361.0833</a></div>
		</div>
	</div>
	
</div>

<div class="why-ctl">
	<div class="container wrapper">
	<div class="padding-fix">
		<p class="why-ctl-content">
			Get all the efficiencies and cost benefits of a cloud solution that can easily integrate <br/>into your existing IT environment. At the same time this is a solution that meets <br/>all of your security and compliance requirements. CenturyLink Data backup overcomes <br/>the challenges of migrating to cloud while providing an easy-to-manage back-up and <br/>restore process, ensuring that your data is always available.
		</p>
	</div>
	</div>
</div>
	
	<div id="idata">
		<?php page_inc("it/data-backup/i-data.php"); ?>
	</div>
</div>
<?php page_footer();?>