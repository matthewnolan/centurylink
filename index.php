<?php
	#############
	# THIS PART IS PAGE LOADER
	#############
	
	include_once dirname(__FILE__) . "/config.php";
	
	#############
	# END PAGE LOADER
	#############
?>


<?php page_header("CenturyLink Cloud"); ?>
<div id="home">
	<?php page_inc("home.php"); ?>
</div>
<?php page_footer(); ?>
