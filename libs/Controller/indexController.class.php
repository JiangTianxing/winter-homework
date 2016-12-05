<?php
	class indexController {
		public $auth;

		public function __construct() {
			session_start();
		} 
//日志分页
		public function jourPaging() {
			$jourobj = M('jour');
			$data = $jourobj->getJourPagingData();
			VIEW::assign(array('jourPaging'=> $data));
		}
//时光轴
		public function jour() {
			$this->header();
			$jourobj = M('jour');
			$data = $jourobj->getJourinfor();
			VIEW::assign(array('jourInfor'=> $data));
			VIEW::display('index/jour.html');
		}
//点赞
		public function addlove() {
			$addloveobj = M('jour');
			$data = $addloveobj->addlove();
		}
//头部html
		public function header() {
			$headerobj = M('header');
			$data = $headerobj->getHeaderData();
			VIEW::assign(array('headerData'=> $data));
		}
//相册图片添加
		public function albumImage() {
			$this->header();
			$imageobj = M('image');
			$data1 = $imageobj->getImageData('samll');
			$data2 = $imageobj->getImageData('big');
			VIEW::assign(array('albumImage'=>$data1));
			VIEW::assign(array('albumbig'=>$data2));
			VIEW::display('index/album.html');
		}
//个人信息
		public function revise() {
			$this->header();
			VIEW::display('index/revise.html');
		}
//书签与日志推荐
		public function tag() {
			$tagobj = M('jour');
			$data = $tagobj->getTagData();
			VIEW::assign(array('tag'=>$data));
		}
//评论
		public function comment() {
			$commentobj = M('jour');
			$commentobj->comment();
		}
//登录
		public function login() {
			if ($_GET['method']=='login') {
				if (!isset($_POST['submit'])) {
					VIEW::display('index/login.html');
				}	
			}
		}
		public function checkLogin(){
			if(empty($_POST['username'])||empty($_POST['password'])){
				$this->showmessage('登录失败！', 'revise.php');
			}else{
				$username = daddslashes($_POST['username']);
				$password = daddslashes($_POST['password']);
				$authobj = M('auth');
				if($auth = $authobj->checkauth($username, $password)){
					$_SESSION['auth'] = $auth;
					$this->showmessage('登录成功！', '../admin.php');
					$_SESSION['status'] = true;
				}else{
					$this->showmessage('登录失败！', 'revise.php');
					$_SESSION['status'] = false;
				}
			}
		}
		private function showmessage($alert, $path) {
			echo "<script>alert('{$alert}');window.location = '{$path}'</script>";
		}
//index页功能
		public function index() {
			$this->header();
			$this->tag();
			$this->jourPaging();
			VIEW::assign(array('button'=>array('method'=>'login','controller'=>'admin','name'=>'登录')));
			VIEW::display('index/index.html');
		}


	}
?>