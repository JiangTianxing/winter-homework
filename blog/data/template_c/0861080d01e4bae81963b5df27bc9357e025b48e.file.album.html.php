<?php /* Smarty version Smarty-3.1.16, created on 2016-03-04 16:45:39
         compiled from "..\tpl\index\album.html" */ ?>
<?php /*%%SmartyHeaderCode:2884656d2b13716f3a4-93884285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0861080d01e4bae81963b5df27bc9357e025b48e' => 
    array (
      0 => '..\\tpl\\index\\album.html',
      1 => 1457109936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2884656d2b13716f3a4-93884285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2b137245384_89727910',
  'variables' => 
  array (
    'albumImage' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2b137245384_89727910')) {function content_56d2b137245384_89727910($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ablum</title>
	<link rel="stylesheet" type="text/css" href="../img/css/ablum.css">
	<link rel="stylesheet" type="text/css" href="../img/css/navigation.css">
	
<style type="text/css">
#mask{
		background-color:#ccc;
		opacity:0.5;
		filter: alpha(opacity=50); 
		position:fixed; 
		top: 0;
		left: 0;
		z-index:1000;
}
#login {
	z-index: 2200;
	position: fixed;
}
</style>
</head>



<?php echo $_smarty_tpl->getSubTemplate ('index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
" onclick="post('../img/image/albumbig/<?php echo $_smarty_tpl->tpl_vars['data']->value['image_name'];?>
')">
			</div>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
  	function post(filename) {
  		var _Width=document.getElementsByTagName('html')[0].clientWidth;
  		var wHeight= document.getElementsByTagName('html')[0].clientHeight;
		var oMask=document.createElement("div");
			oMask.id="mask";
			oMask.style.width=_Width+"px";
			oMask.style.height=wHeight+"px";
			document.body.appendChild(oMask);
			oMask.onclick=function() {
				document.body.removeChild(oMask);
				document.body.removeChild(oLogin);
			}
		var oLogin=document.createElement("div");
			oLogin.id="login";
			oLogin.innerHTML="<div><img src='"+filename+"'></div>";
			oLogin.style.left=(_Width-1000)/2+"px"
			oLogin.style.top='20px';

			document.body.appendChild(oLogin);
	}
  </script>
  <script type="text/javascript" src="../img/js/navigation2.js"></script>
</body>
</html><?php }} ?>
