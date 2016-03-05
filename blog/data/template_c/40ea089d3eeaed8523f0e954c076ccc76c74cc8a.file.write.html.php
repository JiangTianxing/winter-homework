<?php /* Smarty version Smarty-3.1.16, created on 2016-03-02 10:07:25
         compiled from "..\tpl\admin\write.html" */ ?>
<?php /*%%SmartyHeaderCode:2044956d3cd8aa71476-08783378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40ea089d3eeaed8523f0e954c076ccc76c74cc8a' => 
    array (
      0 => '..\\tpl\\admin\\write.html',
      1 => 1456721334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2044956d3cd8aa71476-08783378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d3cd8aaec371_60410688',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3cd8aaec371_60410688')) {function content_56d3cd8aaec371_60410688($_smarty_tpl) {?><!-- 添加日志 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Write</title>
	<link rel="stylesheet" href="img/js/KindEditor/themes/default/default.css" />
	<link rel="stylesheet" type="text/css" href="../img/css/write.css">
	<link rel="stylesheet" type="text/css" href="../img/css/navigation.css"></head>
<body>




	<?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="write-core">
		<div class="write-jour">
			<form action="write.php?method=addJour" method="POST">
				<div class="first-step">
					<div class="title">
						<div class="wt">标题：</div>
						<input class="title-input" name="jour_title">
					</div>
					<div class="write-tag">
						<div class="wag">标签：</div>
						<input class="tag-input" name="jour_tag">
					</div>
				</div>
				<textarea id="article" name="jour_content" style="width:698px;height:400px;visibility:hidden;margin-top: 200px;"></textarea>
				<input type="submit" class="up" name="submit" value="发表"></form>
		</div>
	</div>



	
	<script src="../img/js/KindEditor/kindeditor-min.js" type="text/javascript"></script>
	<script charset="utf-8" src="../img/js/KindEditor/lang/zh_CN.js"></script>
	<script type="text/javascript" src="../img/js/anavigation2.js"></script>
	<script type="text/javascript">
	KindEditor.ready(function(K) {
		K.create('#article', {
		 themeType : 'simple'
		});
	});
</script>
</body>
</html><?php }} ?>
