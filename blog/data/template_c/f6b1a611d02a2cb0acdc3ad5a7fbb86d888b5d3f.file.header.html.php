<?php /* Smarty version Smarty-3.1.16, created on 2016-03-04 11:13:35
         compiled from "..\tpl\index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:746056d2ae62c7fe74-75075082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6b1a611d02a2cb0acdc3ad5a7fbb86d888b5d3f' => 
    array (
      0 => '..\\tpl\\index\\header.html',
      1 => 1457090007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '746056d2ae62c7fe74-75075082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ae62c91a85_63918645',
  'variables' => 
  array (
    'headerData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ae62c91a85_63918645')) {function content_56d2ae62c91a85_63918645($_smarty_tpl) {?><!-- 头部html -->
<div class="music"></div>
<div class="cen-pic">
	<div class="welcome-title">Welcome,myfriend.</div>
	<div class="theme"><?php echo $_smarty_tpl->tpl_vars['headerData']->value['theme'];?>
</div>
	<div class="close-w"></div>
	<div class="ZXY"></div>
	<div class="JTX"></div>
</div>
<ul id="navigation">
	<li class="mylogo"></li>
	<li class="home">首页</li>
	<li class="journal">日志</li>
	<li class="ablum">相册</li>
	<li class="private">登录</li>
</ul>
<div class="banner"></div><?php }} ?>
