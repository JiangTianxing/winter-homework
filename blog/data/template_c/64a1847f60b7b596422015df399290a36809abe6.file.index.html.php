<?php /* Smarty version Smarty-3.1.16, created on 2016-02-28 08:22:16
         compiled from "..\tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:179656d2ae384618f5-73872519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a1847f60b7b596422015df399290a36809abe6' => 
    array (
      0 => '..\\tpl\\admin\\index.html',
      1 => 1456646399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179656d2ae384618f5-73872519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ae3847b1b5_65482180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ae3847b1b5_65482180')) {function content_56d2ae3847b1b5_65482180($_smarty_tpl) {?><!-- 全体 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="../img/css/home.css">
	<link rel="stylesheet" type="text/css" href="../img/css/navigation.css">
</head>
<body>



<!-- 头部 -->
	<?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="core">
		<!-- 日志 -->
			<?php echo $_smarty_tpl->getSubTemplate ('index/journal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="massage">留言板</div>
	</div>


	
<script type="text/javascript" src="../img/js/navigation1.js"></script>
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
