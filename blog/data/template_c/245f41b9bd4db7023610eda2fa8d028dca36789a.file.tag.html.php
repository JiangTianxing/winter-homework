<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 04:06:05
         compiled from "tpl\index\tag.html" */ ?>
<?php /*%%SmartyHeaderCode:1656656d2ae600ac029-97347632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245f41b9bd4db7023610eda2fa8d028dca36789a' => 
    array (
      0 => 'tpl\\index\\tag.html',
      1 => 1457150762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656656d2ae600ac029-97347632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ae600fe2f3_31554704',
  'variables' => 
  array (
    'tag' => 0,
    'row2' => 0,
    'row1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ae600fe2f3_31554704')) {function content_56d2ae600fe2f3_31554704($_smarty_tpl) {?><!-- 标签 与 日志 推荐 -->
<div class="recommend">
	<!--推荐阅读-->
	<span style="color: blue;float: left;font-size: 20px">推荐阅读</span>
	<?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag']->value['title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value) {
$_smarty_tpl->tpl_vars['row2']->_loop = true;
?>
	<div class="rec-title"><?php echo $_smarty_tpl->tpl_vars['row2']->value['jour_title'];?>
</div>
	<?php } ?>
</div>
<div class="tags">
	<span style="color: blue;float: left;font-size: 20px">分类</span>
	<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
?>
	<div class="tag"><?php echo $_smarty_tpl->tpl_vars['row1']->value['jour_tag'];?>
</div>
	<?php } ?>
</div><?php }} ?>
