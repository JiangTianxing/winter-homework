<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 03:54:16
         compiled from "tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:945756d2b122dc6f36-33456824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960134157fa259e4e66125a4a4ef37297a26b6d9' => 
    array (
      0 => 'tpl\\admin\\index.html',
      1 => 1457150053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '945756d2b122dc6f36-33456824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2b122de8e33_58825763',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2b122de8e33_58825763')) {function content_56d2b122de8e33_58825763($_smarty_tpl) {?><!-- 全体 -->
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
	<?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="core">
		<!-- 日志 admin-->
			<?php echo $_smarty_tpl->getSubTemplate ('admin/journal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>


	
<script type="text/javascript" src="img/js/anavigation1.js"></script>
<script type="text/javascript">
	love.click(function(){
	var love = document.querySelector('.love-jour');
    var lovenumber = love.innerHTML;
    var id = document.querySelector('.jour-title').innerHTML;
	love.fadeOut(300);
	$.ajax({
		type:"POST",
		url:"../lib/journal.php",
		data:"id="+id,
		cache:false,
		success:function(data){
			love.html(data);
			love.fadeIn(300);
		}
	});
});
</script>	
</body>
</html>
<?php }} ?>
