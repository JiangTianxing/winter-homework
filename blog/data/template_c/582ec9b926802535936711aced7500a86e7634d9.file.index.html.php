<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 04:02:09
         compiled from "tpl\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1711556d2ae5fd7d965-56549744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582ec9b926802535936711aced7500a86e7634d9' => 
    array (
      0 => 'tpl\\index\\index.html',
      1 => 1457150527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711556d2ae5fd7d965-56549744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ae5fde1277_90273326',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ae5fde1277_90273326')) {function content_56d2ae5fde1277_90273326($_smarty_tpl) {?><!-- 全体 -->
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

	</div>


	
<script type="text/javascript" src="img/js/navigation1.js"></script>

</body>
</html>
<?php }} ?>
