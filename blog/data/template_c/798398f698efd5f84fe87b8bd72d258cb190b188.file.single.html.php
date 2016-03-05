<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 05:00:30
         compiled from "..\tpl\admin\single.html" */ ?>
<?php /*%%SmartyHeaderCode:306956d2fda9c8db36-59167208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798398f698efd5f84fe87b8bd72d258cb190b188' => 
    array (
      0 => '..\\tpl\\admin\\single.html',
      1 => 1457154026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306956d2fda9c8db36-59167208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2fdaa12de62_59443954',
  'variables' => 
  array (
    'singleData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2fdaa12de62_59443954')) {function content_56d2fdaa12de62_59443954($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>单页</title>
	<link rel="stylesheet" type="text/css" href="../img/css/single.css"></head>
<body>

	<ul id='navigation' name='bang'>
		<?php if (isset($_smarty_tpl->tpl_vars['singleData']->value['pagenum'])) {?>
			<a href="../admin.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['singleData']->value['pagenum'];?>
">
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['singleData']->value['method'])) {?>
			<a href="../user/jour.php">
		<?php }?>
		返回
			</a>
		<li class='mylogo'>
			<img src='../img/image/ZXY.png'></li>
		<li class='name'></li>
	</ul>
	<div class='banner'></div>
	<div class='jour'>
		<h1 class='journal-title'><?php echo $_smarty_tpl->tpl_vars['singleData']->value['jour_title'];?>
</h1>
		<div class='imf'>
			<div class='lovenumber'><?php echo $_smarty_tpl->tpl_vars['singleData']->value['jour_love'];?>
赞|</div>
			<div class='time'>发布于:<?php echo $_smarty_tpl->tpl_vars['singleData']->value['jour_time'];?>
</div>
			<div class='share'></div>
		</div>
		<hr>
		<div class='alljour'><?php echo $_smarty_tpl->tpl_vars['singleData']->value['jour_content'];?>
</div>
		<div class='alltag'>
			标签
			<br/>
			<div class='tag'><?php echo $_smarty_tpl->tpl_vars['singleData']->value['jour_tag'];?>
</div>
		</div>
	</div>
	<!-- <div class='quickcom'>
		<div class='quickimf'>
			<div class='cmtlogo'></div>
			<form action='1.php' method='POST'>
				<input type='text' name='comment' class='cmt'>
				<input type='submit' class='cmtsub'></form>
			<div class='backtop'>回到顶部</div>
			<div class='love'></div>
		</div>
	</div>
	<div class='comment'></div> -->

	<script type="text/javascript" src="../img/js/single.js"></script>
</body>
</html><?php }} ?>
