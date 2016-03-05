<?php

	$includepath = dirname(__FILE__).'/../include.php';
	require_once($includepath);
	class PC{
		public static $controller;
		public static $method;
		private static $config;
		private static function init_db() {
			DB::init('mysql', self::$config['dbconfig']);
		}

		private static function init_view() {
			VIEW::init('Smarty', self::$config['viewconfig']);
		}

		private static function init_controllor() {
			if (is_null(self::$controller)) {
				self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
			}
		}

		private static function init_method() {
			if (is_null(self::$method)) {
				self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
			}
		}

		public static function set($controller, $method) {
			$controllerArray = array('index'=>array('jourPaging', 'jour', 'addlove', 'header', 'albumImage', 'write', 'revise', 'tag', 'index', 'checkLogin'), 'single'=>array('indexDisplay', 'adminDisplay'), 'admin'=>array('checkLogin', 'index', 'jour', 'albumImage', 'addAlbumImage', 'revise', 'addJour', 'write', 'deleteJour', 'update', 'modify', 'modifydisplay', 'reply', 'single'));
			if (array_key_exists($controller, $controllerArray)) {
				if (in_array($method, $controllerArray[$controller])) {
					self::$controller = daddslashes($controller);
					self::$method = daddslashes($method);
				}
			}
		} 

		public static function run1($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			C(self::$controller, self::$method);
		}

		public static function run2($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			C(self::$controller, self::$method);
		}
	}
?>