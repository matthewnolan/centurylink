<?php
	defined("ROOT_PATH")
	or define("ROOT_PATH", realpath(dirname(__FILE__)));
	
	define('DS', DIRECTORY_SEPARATOR);
	
	function define_root_url($path) {
		$path = dirname($path);
		$relative_path = str_replace(ROOT_PATH, '', $path);
		$relative_path = str_replace('\\', '/', $relative_path);
		$relative_path = trim($relative_path, '/');
		$splits = explode('/', $relative_path);
		$root_url = '.';
		$num = count($splits);
		if(!empty($relative_path)) {
			for($i = 0; $i<$num; $i++) {
				$root_url .= '/..';
			}
		}
		defined("ROOT_URL") or define('ROOT_URL', $root_url);
	}
	
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
	

