<?php
	#############
	# THIS PART IS PAGE LOADER
	#############
	
	include_once dirname(__FILE__) . "/config.php";
	define_root_url(__FILE__);
	
	#############
	# END PAGE LOADER
	#############
?>


<?php page_header("CenturyLink Cloud"); ?>
<div id="home">
	<?php page_inc("home.php"); ?>
</div>
<?php page_footer(); ?>
