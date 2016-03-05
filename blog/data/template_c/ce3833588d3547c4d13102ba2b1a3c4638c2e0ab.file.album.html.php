<?php /* Smarty version Smarty-3.1.16, created on 2016-02-28 14:23:01
         compiled from "tpl\admin\album.html" */ ?>
<?php /*%%SmartyHeaderCode:2247256d301bc5094c1-96949532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3833588d3547c4d13102ba2b1a3c4638c2e0ab' => 
    array (
      0 => 'tpl\\admin\\album.html',
      1 => 1456669296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2247256d301bc5094c1-96949532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d301bc5ba945_63602540',
  'variables' => 
  array (
    'albumImage' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d301bc5ba945_63602540')) {function content_56d301bc5ba945_63602540($_smarty_tpl) {?><!-- 相册 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ablum</title>
	<link rel="stylesheet" type="text/css" href="../img/css/ablum.css">
	<link rel="stylesheet" type="text/css" href="../img/css/navigation.css">
</head>



<?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="pic-core">
		<div class="picture">
			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albumImage']->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
			<div class='abl'>
				<div class='close-pic'></div>
				<img src="<?php echo $_smarty_tpl->tpl_vars['albumImage']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['image_name'];?>
">
				<p class='title-pic'>xxxx</p>
			</div>
			<?php } ?>
		</div><!--这块布局你按照你的需要修改，毕竟上传，分类，展现分不开，写好后，我再把轮播，点赞的功能写上去-->
	</div>



<script type="text/javascript" src="../img/js/anavigation2.js"></script>
<script type="text/javascript">
	var upload = document.querySelector('.upload');
var uppic = document.querySelector('.up-pic');
var upp = document.querySelector('.upp');
var put = document.querySelector('.put');
var cl = document.querySelector('.close-up');
upload.addEventListener('click',function(){
	uppic.style.display = "block";
});
cl.addEventListener('click',function(){
	uppic.style.display = "none";
});
upp.addEventListener('click',function(){
	put.click();
});
var abls = document.querySelectorAll('.abl');
var closepics = document.querySelectorAll('.close-pic');
for (var i = 0; i < closepics.length; i++) {
	(function(j){
		var m = j;
		closepics[j].addEventListener('click',function(){
			abls[m].style.display = "none";
		});
		abls[j].addEventListener('mouseover',function(){
			closepics[m].style.display = "block";
		});
		abls[j].addEventListener('mouseout',function(){
			closepics[m].style.display = "none";
		});
	})(i);
};
</script>
</body>
</html><?php }} ?>
