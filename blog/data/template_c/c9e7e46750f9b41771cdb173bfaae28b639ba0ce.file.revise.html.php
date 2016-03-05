<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 05:47:50
         compiled from "..\tpl\index\revise.html" */ ?>
<?php /*%%SmartyHeaderCode:1272756d2ae62beab43-52516812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e7e46750f9b41771cdb173bfaae28b639ba0ce' => 
    array (
      0 => '..\\tpl\\index\\revise.html',
      1 => 1457156865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272756d2ae62beab43-52516812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ae62c68744_17631036',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ae62c68744_17631036')) {function content_56d2ae62c68744_17631036($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>revise</title>
	<link rel="stylesheet" type="text/css" href="../img/css/resvise.css">
	<link rel="stylesheet" type="text/css" href="../img/css/navigation.css">
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="revise">
		<form action="1.php" method="POST">
			<div class="relogo">
				<div class="clogo"></div>
				<input type="file" name="relogo" style="display:none" class="rel">
				<div class="logobutton">选择</div>
			</div>
			<div class="rename">
			    <div class="det">昵称：蜥蜴</div>
			    <div class="rea" >修改</div>
				<input type="text" name="rename" class="reput">
			</div>
			<div class="reqq">
			    <div class="det">QQ :1026123335</div>
			    <div class="req" >修改</div>
				<input type="text" name="reqq" class="reput"  >
			</div>
			<div class="retel">
			    <div class="det">电话： 13608379573</div>
			    <div class="ret" >修改</div>
				<input type="text" name="retel" class="reput" >
			</div>
			<input type="submit" value="提交" class="sub">
		</form>
	</div>
	<div class="sign">
		<form action="login.php" method="POST">
			<div class="s-name">用户：<input class="nameput" name="username" type="text" /></div>
			<br/>
			<div class="s-psw">密码：<input class="pswput" name="password" type="password" /></div>
			<input class="signsub" type="submit">
		</form>
	</div>
<script type="text/javascript" src="../img/js/navigation2.js"></script>
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
