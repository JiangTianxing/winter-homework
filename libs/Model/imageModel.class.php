<?php
//有关图片所有操作的类
	class imageModel {
		public $smallpath = '../img/image/album/';//图片获取 与 保存路径
		public $bigpath = '../img/image/albumbig/';
		public $class = 'album';			//图片类型

		function set($key, $value) {
			$array = array('smallpath', 'bigpath');
			if (in_array($key, $array)) {
				$this->$key = $value;
			}
		}

		function getImageData($pathtype) {
			$sql = "SELECT image_name FROM image WHERE class='{$this->class}' ORDER BY id DESC";
			$imageName = DB::findAll($sql);
			if ($pathtype == 'big') {
				$imageAdress = array('path'=>$this->bigpath,'name'=>$imageName);
			}else{
				$imageAdress = array('path'=>$this->smallpath,'name'=>$imageName);
			}
			return $imageAdress;
		}

		function addAlbumImage() {
			$up = M('upload');
			$up->setPath('../img/image/album/');
			if (!$up->upload('myfile')) {
				print_r($up->getErrorMsg());
			}else{
				$imageName = $up->getFileName();
				foreach ($imageName as $row) {
					$filename = $this->smallpath.$row;
					$copyfile = $this->bigpath.$row; 
					copy($filename, $copyfile);
					list($width_orig,$height_orig) = getimagesize($filename);
					$this->imageThumb($copyfile, 1000);
					$this->imageThumb($filename, 200);
				}
				$this->addImageData('album',$imageName);
			}
			echo "<script>window.location='album.php';</script>";
		}

		function imageThumb($filename,$width=200) {
			list($width_orig,$height_orig) = getimagesize($filename);
			$height = $width/$width_orig*$height_orig;
			$array = explode('.', $filename);
			$filetype = $array[3];
			$image_p = imagecreatetruecolor($width, $height);
			if ($filetype == 'jpg') {
				$image = imagecreatefromjpeg($filename);
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
				imagejpeg($image_p,$filename,100);
			}elseif ($filetype == 'gif') {
				$image = imagecreatefromgif($filename);
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
				imagegif($image_p,$filename,100);
			}else{
				$image = imagecreatefrompng($filename);
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
				imagepng($image_p,$filename,100);
			}
			imagedestroy($image_p);
			imagedestroy($image);
		}

		function addImageData($class,$imageName) {
			foreach ($imageName as $row) {
				$array =array('image_name'=>$row, 'class'=>$class);
				DB::insert('image',$array);
			}
		}

	}
?>