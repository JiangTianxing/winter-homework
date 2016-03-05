<?php
//smarty视图引擎
	$left_delimiter = '{';
	$right_delimiter = '}';
	$template_dir = 'tpl';
	$compile_dir = 'data/template_c';
//数据库
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpsw = 'jxx970224';
	$dbname = 'homework';
	$dbcharset = 'utf8';


	
//一级目录
	$config1 = array(
		'viewconfig' => 
		array(
			'left_delimiter' => $left_delimiter,  
			'right_delimiter' => $right_delimiter,  
			'template_dir' => $template_dir,  
			'compile_dir' => $compile_dir),
		'dbconfig' => 
		array(
			'dbhost' => $dbhost, 
			'dbuser'=> $dbuser, 
			'dbpsw' => $dbpsw, 
			'dbname' => $dbname, 
			'dbcharset' => $dbcharset)
	);
//二级目录
	$config2 = array(
		'viewconfig' => 
		array(
			'left_delimiter' => $left_delimiter,  
			'right_delimiter' => $right_delimiter,  
			'template_dir' => '../'.$template_dir,  
			'compile_dir' => '../'.$compile_dir),
		'dbconfig' => 
		array(
			'dbhost' => $dbhost, 
			'dbuser'=> $dbuser, 
			'dbpsw' => $dbpsw, 
			'dbname' => $dbname, 
			'dbcharset' => $dbcharset)
	);
?>