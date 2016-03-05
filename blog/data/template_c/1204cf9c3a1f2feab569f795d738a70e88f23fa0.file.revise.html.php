<?php /* Smarty version Smarty-3.1.16, created on 2016-03-02 15:15:28
         compiled from "..\tpl\admin\revise.html" */ ?>
<?php /*%%SmartyHeaderCode:2481856d301e13625f9-26174204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1204cf9c3a1f2feab569f795d738a70e88f23fa0' => 
    array (
      0 => '..\\tpl\\admin\\revise.html',
      1 => 1456931703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2481856d301e13625f9-26174204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d301e13b8909_04358427',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d301e13b8909_04358427')) {function content_56d301e13b8909_04358427($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>revise</title>
	<link rel="stylesheet" type="text/css" href="../img/css/resvise.css">
	<link rel="stylesheet" type="text/css" href="../img/css/navigation.css">
	<style type="text/css">
.revise {
	width: 1200px;
	height: 600px;
	position: relative;
	margin: 0 auto;
	display: block;
	background: url('../image/s.jpg') center no-repeat;
}
	</style>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="revise">
		<form action="revise.php?method=update" method="POST" enctype='multipart/form-data'>>
			<div class="relogo">
				<div class="clogo"></div>
				<input type="hidden" name="MAX_FILE_SIZE" value="100000000000">
				<input type="file" name="logo" style="display:none" class="rel">
				<div class="logobutton">选择</div>
			</div>
			<div class="rename">
			    <div class="det">昵称：蜥蜴</div>
			    <div class="rea" >修改</div>
				<input type="text" name="real_name" class="reput">
			</div>
			<div class="reqq">
			    <div class="det">QQ :1026123335</div>
			    <div class="req" >修改</div>
				<input type="text" name="qq" class="reput"  >
			</div>
			<div class="retel">
			    <div class="det">电话： 13608379573</div>
			    <div class="ret" >修改</div>
				<input type="text" name="tel" class="reput" >
			</div>
			<input type="submit" value="提交" class="sub">
		</form>
	</div>
<script type="text/javascript" src="../img/js/anavigation2.js"></script>
<script type="text/javascript">
	var rel = document.querySelector('.rel');
var logob = document.querySelector('.logobutton');
logob.addEventListener('click',function(){
	rel.click();
});
var rea = document.querySelector('.rea');
var req = document.querySelector('.req');
var ret = document.querySelector('.ret');
var reputs = document.querySelectorAll('.reput');
rea.addEventListener('click',function(){
	reputs[0].style.display = "block";
});
req.addEventListener('click',function(){
	reputs[1].style.display = "block";
});
ret.addEventListener('click',function(){
	reputs[2].style.display = "block";
});
</script>
</body>
</html><?php }} ?>
