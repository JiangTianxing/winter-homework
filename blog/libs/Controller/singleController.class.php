<?php
	class singleController {

		public function single() {
			$singleobj = M('single');
			$singleData = $singleobj->getSingleData();
			VIEW::assign(array('singleData'=>$singleData));
		}

		public function header() {
			$headerobj = M('header');
			$data = $headerobj->getHeaderData();
			VIEW::assign(array('headerDate'=> $data));
		}

		public function indexDisplay() {
			$this->header();
			$this->single();
			VIEW::display('single/single.html');
		}

		public function adminDisplay() {
			$this->header();
			$this->single();
			VIEW::display('admin/single.html');
		}
	}
?>