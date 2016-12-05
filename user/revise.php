<?php
	header("Content-type: text/html; charset=utf-8");
	require_once('../config.php');
	require_once('../framework/pc.php');
	if (isset($_GET['method']) && $_GET['method'] == 'update') {
		PC::set('admin', 'update');
	}else {
		PC::set('admin', 'revise');
	}
	PC::run2($config2);
?>