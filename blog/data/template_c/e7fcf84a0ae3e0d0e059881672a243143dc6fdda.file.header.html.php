<?php /* Smarty version Smarty-3.1.16, created on 2016-03-04 11:14:12
         compiled from "tpl\admin\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2984856d2b122d282c1-61069549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7fcf84a0ae3e0d0e059881672a243143dc6fdda' => 
    array (
      0 => 'tpl\\admin\\header.html',
      1 => 1457090000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2984856d2b122d282c1-61069549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2b122d98663_82314534',
  'variables' => 
  array (
    'headerData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2b122d98663_82314534')) {function content_56d2b122d98663_82314534($_smarty_tpl) {?><!-- 头部html -->
<div class="music"></div>
<div class="cen-pic">
	<div class="welcome-title">欢迎,<?php echo $_smarty_tpl->tpl_vars['headerData']->value['real_name'];?>
.</div>
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
	<li class="write">Write</li>
	<li class="private">用户信息</li>
</ul>
<div class="banner"></div><?php }} ?>
