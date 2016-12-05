<?php
	header("Content-type: text/html; charset=utf-8");
	require_once('../config.php');
	require_once('../framework/pc.php');
	$controller = 'admin';
	if (isset($_GET['method']) && $_GET['method']== 'addAlbumImage') {
		$method = 'addAlbumImage';
	}else{
		$method = 'albumImage';
	}
	require_once('check.php');
?>