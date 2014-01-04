<?php
	defined("ROOT_PATH")
	or define("ROOT_PATH", realpath(dirname(__FILE__)));
	defined("ROOT_URL")
	or define("ROOT_URL", '/centurylink/micrositev2' );
	
	#TODO: please update your ROOT_URL on your deployment ENV
	
	define('DS', DIRECTORY_SEPARATOR);
	
	function page_header($title=null, $opt=null){
		global $uri;
		$uri = $opt;
		if(!$title) {
			$title = "CenturyLink Managed Office";
		}
		include ROOT_PATH . DS . 'includes/head.php';
	}
	
	function page_footer(){
		include ROOT_PATH . DS . 'includes/contactform.php';
		include ROOT_PATH . DS . 'includes/footer.php';
	}
	
	function page_inc($path) {
		include ROOT_PATH . DS . ltrim($path, '/');
	}
	
	function get_url($path) {
		echo ROOT_URL . '/' . ltrim($path, '/');
	}
	

