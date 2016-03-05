<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 02:43:23
         compiled from "..\tpl\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2570256d2f4eeb8be31-14039847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c475286686f54524bc1958a359ab78c0c9e3a35' => 
    array (
      0 => '..\\tpl\\index\\index.html',
      1 => 1457145228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2570256d2f4eeb8be31-14039847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2f4eeca8cd0_80059748',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2f4eeca8cd0_80059748')) {function content_56d2f4eeca8cd0_80059748($_smarty_tpl) {?><!-- 全体 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="img/css/home.css">
	<link rel="stylesheet" type="text/css" href="img/css/navigation.css">
</head>
<body>



<!-- 头部 -->
	<?php echo $_smarty_tpl->getSubTemplate ('index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="core">
		<!-- 日志 -->
			<?php echo $_smarty_tpl->getSubTemplate ('index/journal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- 推荐阅读 与 标签栏 -->
			<?php echo $_smarty_tpl->getSubTemplate ('index/tag.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="massage">留言板</div>
	</div>


	
<script type="text/javascript" src="img/js/navigation1.js"></script>

</body>
</html>
<?php }} ?>
