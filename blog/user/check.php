<?php
	session_start();
	if (isset($_SESSION['status']) && $_SESSION['status']==true) {
		PC::set($controller, $method);
		PC::run2($config2);
	}else {
		echo "<script>alert('请先登录');window.location='../index/revise.php';</script>";
	}
?>