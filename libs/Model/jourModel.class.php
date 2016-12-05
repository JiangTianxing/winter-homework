<?php
//有关日志的全部操作类
	class jourModel {

		public $table = 'journal';//数据表名
		public $limit = 2;		//index每页显示显示日志数

//日志分页显示
		public function getJourPagingData() {
			$jourListNum = $this->getJourNum();
			$jourPageNum = ceil($jourListNum/$this->limit);
			$_SESSION['jourTotalNum'] = $jourListNum;
			$data = $this->getJourPagingDataArray($jourPageNum);
			return $data;
		}
		public function getJourNum() {
			$sql = "SELECT * FROM {$this->table}";
			return DB::getNum($sql);
		}
		public function getJourPagingDataArray($jourPageNum) {
			if (isset($_GET['pagenum'])) {
				if ($jourPageNum>1) {
					if ($_GET['pagenum']<=1) {
						$pageNum = 1;
						$type =-1;
					}elseif ($_GET['pagenum']>=$jourPageNum) {
						$pageNum = $jourPageNum;
						$type = 1;
					}else{
						$pageNum = $_GET['pagenum'];
						$type =0;
					}
				}elseif ($jourPageNum==1) {
					$pageNum = 1;
					$type = 2;
				}
			}elseif ($jourPageNum>1) {
				$pageNum = 1;
				$type = -1;
			}else{
				$pageNum = 1;
				$type = 2;
			}
			$_SESSION['pagenum'] = $pageNum;
			$offset = ($pageNum-1)*$this->limit;
			$sql = "SELECT * FROM {$this->table} ORDER BY jour_time DESC LIMIT {$offset},{$this->limit}";
			$getData = DB::findAll($sql);
			$data = array('type'=>$type, 'pageNum'=>$pageNum,'totalNum'=>$jourPageNum, 'data'=>$getData);
			return $data;
		}

//评论
		public function comment() {
			if (isset($_POST['submit'])) {
				$name = addslashes($_POST['name']);
				$content = addslashes($_POST['content']);
				$jour_id = addslashes($_POST['jour_id']);
				$time = time();
				$time = date("y-m-d G:i:s",$time);
				$commentData = array('name'=> $name, 'content'=> $content, 'jour_id'=> $jour_id, 'time'=> $time);
				DB::insert('comments', $commentData);
			}
		}
//回复
		public function reply() {
			if (isset($_POST['submit'])) {
				$id = addslashes($_POST['id']);
				$reply = addslashes($_POST['reply']);
				$jour_id = addslashes($_POST['jour_id']);
				$time = time();
				$time = date("y-m-d G:i:s",$time);
				$$replyData = array('jour_id'=>$jour_id , 'reply'=> $reply, 'time'=> $time, 'id'=>$id); 
				DB::insert('reply', $replyData);
			}
		}
//日志更改
		public function modify() {
				if (isset($_POST['submit'])) {
					$jour_title = addslashes($_POST['jour_title']);
					$jour_content = addslashes($_POST['jour_content']);
					$jour_tag = addslashes($_POST['jour_tag']);
					$array = array('jour_title'=>$jour_title, 'jour_tag'=> $jour_tag, 'jour_content'=>$jour_content);
					$where = "id='{$_GET['id']}'";
					DB::update($this->table, $array ,$where);
					echo "<script>alert('更改成功');window.location='jour.php';</script>";
				}
		}
		public function modifydisplay() {
			if (isset($_GET['jour_id'])) {
				$jour_id = addslashes($_GET['jour_id']);
				$sql = "SELECT * FROM journal WHERE id='{$jour_id}'";
				$data = DB::findOne($sql);
				return $data;
			}
		}
//时光轴
		public function getJourInfor() {
			$sql = "SELECT jour_title,jour_time,jour_tag,id FROM {$this->table} ORDER BY id DESC";
			$baseData = DB::findAll($sql);
			$max = count($baseData);
			$data = array();
			for ($i=0; $i < $max; $i++) {
				$time[$i]=substr($baseData[$i]['jour_time'], 0, 4); 
				$data["$time[$i]"][] = $baseData[$i];
			}
			return $data;
		}
		

//点赞
		public function addlove() {
			if (isset($_POST['submit'])) {
				$newdata = array('jour_love'=>$_POST['jour_love']);
				$where = "id='{$_POST['jour_id']}'";
				DB::update($this->table, $newdata, $where);
				$pagenum = $_GET['pagenum'];
				if (isset($_GET['pagenum'])) {
					echo "<script>window.location='index.php?pagenum={$pagenum}';</script>";
				}
			}
		}

//添加日志
		public function addJour() {
			if($this->checkPostJourData()) {
				$time = time();
				$time = date("y-m-d G:i:s",$time);
				$insertData = array('jour_time'=>$time, 'jour_title'=>$_POST['jour_title'], 'jour_love'=>0, 'jour_content'=>$_POST['jour_content'], 'jour_tag'=>$_POST['jour_tag']);
				DB::insert($this->table, $insertData);
				echo "<script>alert('提交成功');window.location='../admin.php';</script>";
			}else{
				echo "<script>alert('提交失败');window.location='write.php';</script>";
			}
		}
		
		public function checkPostJourData() {
			foreach ($_POST as $row) {
				if (is_null($row)) {
					return false;
				}
			}
			return true;
		}

//删除日志
		public function deleteJour() {
			$where = "id= '{$_GET['jour_id']}'";
			DB::del($this->table, $where);
			echo "<script>alert('删除成功');window.location='jour.php';</script>";
		}
//书签与文章推荐
		public function getTagData() {
			$sqlTag = "SELECT DISTINCT jour_tag FROM {$this->table} LIMIT 8";
			$sqlTitle = "SELECT jour_title FROM {$this->table} ORDER BY id DESC LIMIT 6";
			$tagData = DB::findAll($sqlTag);
			$titleData = DB::findAll($sqlTitle);
			$data = array('tag'=>$tagData, 'title'=>$titleData);
			return $data;
		}

		
	}
?>