<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 05:37:54
         compiled from "..\tpl\single\single.html" */ ?>
<?php /*%%SmartyHeaderCode:423756d2ebfb43c3f2-16389275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b601de19cdb8b74a37976ddf44ca4265879e65d' => 
    array (
      0 => '..\\tpl\\single\\single.html',
      1 => 1457156143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '423756d2ebfb43c3f2-16389275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ebfb599eb7_94060782',
  'variables' => 
  array (
    'singleData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ebfb599eb7_94060782')) {function content_56d2ebfb599eb7_94060782($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>单页</title>
	<link rel="stylesheet" type="text/css" href="../img/css/single.css">
</head>
<body>
	<ul id='navigation' name='bang'>
	<?php if (isset($_smarty_tpl->tpl_vars['singleData']->value['pagenum'])) {?>
		<a href="../index.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['singleData']->value['pagenum'];?>
">
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['singleData']->value['method'])) {?>
		<a href="../index/jour.php">
	<?php }?>
	返回</a>
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
<script type="text/javascript">
var bt = document.querySelector('.bt');
bt.addEventListener('click',function(){
	location.href = "#navigation";
});
var back = document.querySelector('.home');
back.addEventListener('click',function(){
	history.back(-1);
});

</script>
</body>
</html>

<?php }} ?>
