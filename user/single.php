<?php
	header("Content-type: text/html; charset=utf-8");
	require_once('../config.php');
	require_once('../framework/pc.php');
	if (isset($_GET['method']) && $_GET['method'] == 'adminDisplay') {
		PC::set('single', 'adminDisplay');
	}elseif(isset($_GET['method']) && $_GET['method'] == 'reply') {
		PC::set('admin', 'reply');
	}else{
		PC::set('single', 'adminDisplay');
	}
	PC::run2($config2);
?>