<?php
	header("Content-type: text/html; charset=utf-8");
	require_once('../config.php');
	require_once('../framework/pc.php');
	$controller = 'single';
	if (isset($_GET['method']) && $_GET['method']== 'comment') {
		$method = 'comment';
	}else{
		$method = 'indexDisplay';
	}
	PC::set($controller, $method);
	PC::run2($config2);
?>