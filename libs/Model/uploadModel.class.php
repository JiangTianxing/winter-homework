<meta charset = 'UTF-8'>
<?php
/*图片上传操作，上传完成后图片需要剪裁
	1更改文件保存路径
		$up->set('path','./path');
	2更改传输的最大文件大小
		$up->set('maxsize','10000000');必须与html提交表单当中设定的值相同
	3更改传输的文件类型
		$array = array('jpg','gif');

	注意:文件上传后按图片类型自动进行缩大放小

*/
class uploadModel{
	private $path = "../img/image/album/";
	private $allowtype = array('jpg','gif','png');
	private $maxsize = 10000000000;
	private $israndname = true;

	private $orginName;
	private $tmpFileName;
	private $fileType;
	private $fileSize;
	public $newFileName;
	private $errorNum;
	private $errorMess="";
//设置成员属性
	function set($key,$val) {
		$key = strtolower($key);
		if (array_key_exists($key, get_class_vars(get_class($this)))) {
			$this->setOption($key,$val);
		}
		return $this;		
	}
//为成员属性赋值
	function setOption($key,$val) {
		$this->$key = $val;
	}
	function setPath($path) {
		$this->path = $path;
		echo $path;
	}
//上传操作
	function upload($fileField="") {
		$return = true;
		if (!$this->checkFilePath()) {
			$this->errorMess = $this->getError();
			return false; 
		}
		$name = $_FILES[$fileField]['name'];
		$tmp_name = $_FILES[$fileField]['tmp_name'];
		$size = $_FILES[$fileField]['size'];
		$error = $_FILES[$fileField]['error'];

		if (is_array($name)) {
			$errors = array();
			for($i=0;$i<count($name);$i++) {
				if ($this->setFiles($name[$i],$tmp_name[$i],$size[$i],$error[$i])) {
					if (!$this->checkFileSize() || !$this->checkFileType()) {
						$errors[] = $this->getError();
						$return = false;
					}
					//$this->save();
				}else{
					$errors[] = $this->getError();
					$return = false;
				}
				if (!$return) {
					$this->setFiles();
				}
			}
			if ($return) {
				$fileName = array();
				for($i=0;$i<count($name);$i++) {
					if ($this->setFiles($name[$i],$tmp_name[$i],$size[$i],$error[$i])) {
						$this->setNewFileName();
						if (!$this->copyFile()) {
							$errors[] = $this->getError();
							$return = false;
						}
						$fileName[] = $this->newFileName;
					}
				}
				$this->newFileName = $fileName;
			}
			$this->errorMess = $errors;
			return $return;
		}else{
			if ($this->setFiles($name,$tmp_name,$size,$error)) {
				if ($this->checkFileSize() && $this->checkFileType()) {
					$this->setNewFileName();
					if ($this->copyFile()) {
						//$this->save($)
						return true;	
					}else{
						$return = false;
					}
				}else{
					$return = false;
				}
			}else{
				$return = false;
			}
			if (!$return) {
				$this->errorMess = $this->getError();
			}
			return $return;
		}
	}
//获取错误信息
	private function getError() {
		$str = "上传文件<font color='red'>{$this->orginName}</font>时出错:";
		switch ($this->errorNum) {
			case 4:
				$str.= "没有文件被上传<br>";
				break;
			case 3:
				$str.= "文件只有部分被上传<br>";
				break;
			case 2:
				$str.= "上传的文件大小超过了html表单中MAX_FILE_SIZE选项指定的值<br>";
				break;
			case 1:
				$str.= "上传的文件超过了php.ini中upload_max_filesize选项限定的值<br>";
				break;
			case -1:
				$str.= "未允许类型<br>";
				break;
			case -2:
				$str.= "文件过大，上传的文件不能超过{$this->maxsize}个字节<br>";
				break;
			case -3:
				$str.= "上传失败<br>";
				break;
			case -4:
				$str.= "建立存放上传文件目录失败，请重新指定上传目录<br>";
				break;
			case -5:
				$str.= "必须制定上传文件的路径<br>";
				break;		
			default:
				$str.= "未知错误<br>";	
				break;
		}
		return $str.'<br>';
	}
//获取错误信息
	public function getErrorMsg() {
		return $this->errorMess;
	}	
//检查上传路径
	function checkFilePath() {
		if (empty($this->path)) {
			$this->set('errorNum',-5);
			return false;
		}
		if (!file_exists($this->path) || !is_writable($this->path)) {
			if (!@mkdir($this->path,0755)) {
				$this->setOption('errorNum',-4);
				return false;			
			}
		}
		return true;
	}
//设置和file有关的内容
	private function setFiles($name="",$tmp_name="",$size=0,$error=0) {
		$this->setOption('errorNum',$error);
		if ($error) {
			return false;
		}
		$this->setOption('orginName',$name);
		$this->setOption('tmpFileName',$tmp_name);
		$aryStr = explode(".", $name);
		$this->setOption('fileType',strtolower($aryStr[count($aryStr)-1]));
		$this->setOption('fileSize',$size);
		return true;
	}
//获取文件名称
	public function getFileName() {
		return $this->newFileName;
	}
//检查文件路径
	private function checkFileType() { 
		if (in_array(strtolower($this->fileType), $this->allowtype)) {
			return true;
		}else{
			$this->setOption('errorNum',-1);
			return false;
		}
	}
//检查文件大小
	private function checkFileSize() {
		if ($this->fileSize > $this->maxsize) {
			$this->setOption('errorNum',-5);
			return false;
		}
		if (!file_exists($this->path) || !is_writable($this->path)) {
			if (!mkdir($this->path,0755)) {
				$this->setOption('errorNum',-4);
				return false;
			}
		}
		return true;
	}
//随机命名
	private function proRandName() {
		$fileName = date('YmdHis').rand(100,999);
		return $fileName.'.'.$this->fileType;
	}

	private function copyFile() {
		if (!$this->errorNum) {
			$path = rtrim($this->path,'/').'/';
			$path.= $this->newFileName;
			if (@move_uploaded_file($this->tmpFileName, $path)) {
			 	return true;	
			}else{
				$this->setOption('errorNum',-3);
				return false;
			} 
		}else{
			return false;
		}
	}
//设置新文件名
	private function setNewFileName() {
		if ($this->israndname) {
			$this->setOption('newFileName',$this->proRandName());
		}else{
			$this->setOption('newFileName',$this->orginName);
		}
	}
}