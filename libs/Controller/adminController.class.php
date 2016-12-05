<?php
	class adminController {

//日志显示
		public function jourPaging() {
			$jourobj = M('jour');
			$data = $jourobj->getJourPagingData();
			VIEW::assign(array('jourPaging'=> $data));
		}

		public function write() {
			$this->header();
			VIEW::display('admin/write.html');
		}
//回复
		public function reply() {
			$replyobj = M('jour');
			$replyobj->reply();
		}
//日志修改
		public function modifydisplay() {
			$this->header();
			$modifyobj = M('jour');
			$data = $modifyobj-> modifydisplay();
			VIEW::assign(array('modify'=> $data));
			VIEW::display('admin/modify.html');
		}

		public function modify() {
			$modifyobj = M('jour');
			$modifyobj-> modify();
		}
		public function addJour() {
			$addJourobj = M('jour');
			$addJourobj->addJour();
		}

		public function update() {
			$userobj = M('user');
			$userobj->setPath('../img/image/logo/');
			$userobj->update();
		}

		public function deleteJour() {
			$deleteJourobj = M('jour');
			$deleteJourobj->deleteJour();
		}

		public function jour() {
			$this->header();
			$jourobj = M('jour');
			$data = $jourobj->getJourinfor();
			VIEW::assign(array('jourInfor'=> $data));
			VIEW::display('admin/jour.html');
		}

		public function revise() {
			$this->header();
			VIEW::display('admin/revise.html');
		}

		public function header() {
			$headerobj = M('header');
			$data = $headerobj->getHeaderData();
			VIEW::assign(array('headerData'=> $data));
		}

		public function albumImage() {
			$this->header();
			$imageobj = M('image');
			$data1 = $imageobj->getImageData('samll');
			$data2 = $imageobj->getImageData('big');
			VIEW::assign(array('albumImage'=>$data1));
			VIEW::assign(array('albumbig'=>$data2));
			VIEW::display('admin/album.html');
		}

		public function addAlbumImage() {
			$addimageobj = M('image');
			$addimageobj->addAlbumImage();
		}

		public function index() {
			$this->header();
			$this->jourPaging();
			VIEW::assign(array('button'=>array('method'=>'index','controller'=>'index','name'=>'退出')));
			VIEW::display('admin/index.html');
		}
	}
?>