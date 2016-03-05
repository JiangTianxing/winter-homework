<?php
	header("Content-type: text/html; charset=utf-8");
	require_once('../config.php');
	require_once('../framework/pc.php');
	if (isset($_GET['method']) && $_GET['method'] == 'addJour') {
		PC::set('admin', 'addJour');
	}elseif (isset($_GET['method']) && $_GET['method'] == 'modify') {
		PC::set('admin', 'modify');
	}else {
		PC::set('admin', 'write');
	}
	PC::run2($config2);
?>