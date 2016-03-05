<?php
//获取头部信息的类
	class headerModel {
		public $table = 'user_information';

		public function getHeaderData() {
			$sql = "SELECT * FROM {$this->table}";
			$date = DB::findOne($sql);
			return $date;
		}

	}
?>