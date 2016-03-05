<?php /* Smarty version Smarty-3.1.16, created on 2016-03-04 11:13:33
         compiled from "tpl\index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2495256d2ae5fe039a4-65484301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4f679b4ee32c1e1ed9148e0b654369ca0aa05e' => 
    array (
      0 => 'tpl\\index\\header.html',
      1 => 1457090007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2495256d2ae5fe039a4-65484301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ae5fe221b6_67457409',
  'variables' => 
  array (
    'headerData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ae5fe221b6_67457409')) {function content_56d2ae5fe221b6_67457409($_smarty_tpl) {?><!-- 头部html -->
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
