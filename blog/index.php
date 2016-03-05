<?php
	header("Content-type: text/html; charset=utf-8");
	require_once('config.php');
	require_once('framework/pc.php');
	if (isset($_GET['method'])) {
		$indexMethod = array('jourPaging', 'jour', 'addlove', 'header', 'albumImage', 'write', 'revise', 'tag', 'index');
		if (in_array($_GET['method'], $indexMethod)) {
			PC::set('index', daddslashes($_GET['method']));
		}
	}else{
		PC::set('index', 'index');
	}
	PC::run1($config1);
?>