<?php
	#############
	# THIS PART IS PAGE LOADER
	#############
	
	include_once "config.php";
	
	# include other files
	$redirect_url = @$_SERVER['REDIRECT_URL'];
	if(!empty($redirect_url)) {
		$file = str_replace(ROOT_URL, '', $redirect_url);
		if(strpos($file, '.php') === FALSE) {
			$file = rtrim($file, '/') . '/index.php';
		}
		if(file_exists(ROOT_PATH . $file)){
			return include ROOT_PATH . $file;
		}
	}
	
	#############
	# END PAGE LOADER
	#############
?>


<?php page_header("CenturyLink Cloud"); ?>
<div id="home">
	<?php page_inc("home.php"); ?>
</div>
<?php page_footer(); ?>
