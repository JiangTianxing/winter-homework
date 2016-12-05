<?php
	define("ROOT", dirname(__FILE__));
	define('PATH', dirname(__FILE__).'/'.'libs/');
	
	set_include_path('.'.PATH_SEPARATOR.ROOT.'/framework'.PATH_SEPARATOR.ROOT.'../framework'.PATH_SEPARATOR.get_include_path());
	$paths = array(
		'function/function.php',
		'libs/core/DB.class.php',
		'libs/core/VIEW.class.php',
		'libs/db/mysql.class.php',
		'libs/view/Smarty/Smarty.class.php'
	);
	foreach ($paths as $row) {
		require_once($row);
	}
?>