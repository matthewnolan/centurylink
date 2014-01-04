<?php
	defined("ROOT_PATH")
	or define("ROOT_PATH", realpath(dirname(__FILE__)));
	defined("ROOT_URL")
	or define("ROOT_URL", rtrim(rtrim(dirname($_SERVER['PHP_SELF']), '/'), '\\') );
	
	define('DS', DIRECTORY_SEPARATOR);
	
	function page_header($title=null){
		if(!$title) {
			$title = "CenturyLink Cloud";
		}
		include ROOT_PATH . DS . 'includes/header.php';
	}
	
	function page_footer(){
		include ROOT_PATH . DS . 'includes/footer.php';
	}
	
	function page_global_nav(){
		include ROOT_PATH . DS . 'includes/global-nav.php';
	}
	
	function page_inc($path) {
		include ROOT_PATH . DS . ltrim($path, '/');
	}
	
	function get_url($path) {
		echo ROOT_URL . '/' . ltrim($path, '/');
	}
	

