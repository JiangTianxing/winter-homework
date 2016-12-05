<?php
	header("Content-type: text/html; charset=utf-8");
	require_once('../config.php');
	require_once('../framework/pc.php');
	PC::set('admin', 'jour');
	PC::run2($config2);
?>