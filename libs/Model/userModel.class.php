<?php
	class userModel {
		private $table = 'user_information';
		private $path = '../img/image/logo/';
		private $logo;

		function updateText() {
			if (isset($_POST['submit'])) {
				$qq = addslashes($_POST['qq']);
				$real_name = addslashes($_POST['real_name']);
				$tel = addslashes($_POST['tel']);
				$array = array('qq'=> $qq, 'telephone'=> $tel, 'real_name'=> $real_name, 'mylogo'=> $this->logo);
				$where = "id = '1'";
				DB::update($this->table, $array, $where);
				//echo "<script>alert('更新成功');</script>";
			}else{
				//echo "<script>alert('请提交更改信息');</script>";
			}
		}

		function updateLogo() {
			$up = M('upload');
			$up->setPath($this->path);
			if (!$up->upload('logo')) {
				print_r($up->getErrorMsg());
			}else{
				$imageName = $up->getFileName();
				$imageName = $this->path.$imageName;
				$imageobj = M('image');
				$imageobj->imageThumb($imageName, 40);
				$this->logo = $imageName;
			}
		}

		function update() {
			$this->updateLogo();
			$this->updateText();
		}

		function setPath($path) {
			$this->path = $path;
		}
	}
?>