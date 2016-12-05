<?php
	session_start();
	header("Content-type: text/html; charset=utf-8");
	require_once('config.php');
	require_once('framework/pc.php');
	if (isset($_SESSION['status'])) {
		if ($_SESSION['status'] == true) {
			PC::set('admin', 'index');
			PC::run1($config1);
		}else{
			echo "<script>alert('请先登录');window.location='index/revise.php';</script>";
		}
	}else{
		echo "<script>alert('请先登录');window.location='index/revise.php';</script>";
	}
?>