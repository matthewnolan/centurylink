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
		$root_url_abs = dirname($_SERVER['PHP_SELF']);
		$num = count($splits);
		if(!empty($relative_path)) {
			for($i = 0; $i<$num; $i++) {
				$root_url .= '/..';
				$root_url_abs = dirname($root_url_abs);
			}
		}
		defined("ROOT_URL") or define('ROOT_URL', $root_url);
		define('ROOT_URL_ABS', $root_url_abs);
	}

	function curPageURL() {
		$pageURL = 'http';
 		if (@$_SERVER["HTTPS"] == "on") {
 			$pageURL .= "s";
 		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
		} else {
		  	$pageURL .= $_SERVER["SERVER_NAME"];
		}
		return $pageURL;
	}

	function successURL() {
		return curPageURL() . ROOT_URL_ABS . '/success.php';
	}

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


