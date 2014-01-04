<?php
	page_header();
?>

<div id="business-db">
	<div class="hero hidden-xs">
	<div class="container wrapper">
		<div class="hero-container">
			<div class="hero-left">
				<img class="hero-label" src="<?php echo ROOT_URL;  ?>/images/businessdb-label.jpg" alt="DATA BACKUP"/>
				<div class="hero-left-content">
					<p class="headline">Two steps to backing up data.<br/> Turning it on. And forgetting it.</p>
					<h3 class="offer">Try CenturyLink Cloud FREE <br/> for 30 Days.* </h3>
					<p class="call"><a href="tel:800.361.0833">Call 800.361.0833</a></p>
				</div>
			</div>
			<div class="hero-right">
				<img class="icon" src="<?php echo ROOT_URL;  ?>/images/businessdb-icon.png" alt="DATA BACKUP"/>
			</div>
		</div>
	</div>
</div>

<div class="mobile-hero visible-xs">
	<div class="main-hero">
		<img src="<?php echo ROOT_URL;  ?>/images/mobile-business-db-hero.png" alt=""/>
	</div>
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="mobile-hero-content">
				<p class="headline">Two steps to backing up data. Turning it on. And forgetting it.</p>
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
				<object class="nav-logo" data="<?php echo ROOT_URL;?>/images/nav-logo.svg" width="141" height="30" type="image/svg+xml">
					<img src="<?php echo ROOT_URL;  ?>/images/nav-logo.png" alt="CENTURYLINK" width="141" height="30"/>
				</object>
			</a>
			<ul class="multi" id="sticky-nav">
				<li><a href="#easy">Easy Management</a></li>
				<li><a href="#safe">Safe & Available</a></li>
				<li><a href="#ffb">FastForward on Boarding&#8480;</a></li>
				<li><a href="#pricing">Pricing</a></li>
			</ul>
			<div class="fix-center hidden-sm hidden-xs call"><a href="tel:800.361.0833">Call 800.361.0833</a></div>
		</div>
	</div>
	
</div>


<div class="why-ctl">
	<div class="container wrapper">
	<div class="padding-fix">
		<p class="why-ctl-content">
			Not only simple, but effective. CenturyLink Data Back up means never worrying <br/> about backing up critical information again. It also means being able to retrieve files, organize them <br/>and restore data with the press of a button.
		</p>
	</div>
	</div>
</div>
	
	<div id="bdata">
		<?php page_inc("business/data-backup/b-data.php"); ?>
	</div>
</div>
<?php page_footer();?>
