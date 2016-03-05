<?php
//有关日志单页显示的类
	class singleModel {
		public $table = 'journal';

		function getSingleData() {
			if (isset($_GET['jourid'])) {
				$jourId = intval($_GET['jourid']);
			}else{
				$jourId = 1;
			}
			$singleData = $this->getSingleJourData($jourId);
			return $singleData;
		} 

		function getSingleJourData($jourId) {
			$sql = "SELECT * FROM {$this->table} WHERE id='{$jourId}'";
			$data = DB::findOne($sql);
			if (is_null($data)) {
				$jourId = 1;
				$data = DB::findOne($sql);
			}
			if (isset($_GET['pagenum'])) {
				$data['pagenum'] = $_GET['pagenum'];
			}
			if (isset($_GET['last'])) {
				$data['method'] = $_GET['last'];
			}
			return $data;
		}
	}
?>