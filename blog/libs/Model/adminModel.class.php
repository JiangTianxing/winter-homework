<?php
//有关登录操作的类
	class adminModel{

		public $table = 'admin';

		function findOne_by_username($username){
			$sql = "SELECT * FROM {$this->table} WHERE username='{$username}'";
			return DB::findOne($sql);
		}

		function count(){
			$sql = "SELECT COUNT(*) FROM {$this->table}";
			return DB::findResult($sql, 0, 0);
		}
	}
?>