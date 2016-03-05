<?php /* Smarty version Smarty-3.1.16, created on 2016-03-03 15:23:30
         compiled from "..\tpl\index\tag.html" */ ?>
<?php /*%%SmartyHeaderCode:827656d2f4ef1fe1a3-09203703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb2b5e6e3307ac764d2b3a6e465684ddcf106d0e' => 
    array (
      0 => '..\\tpl\\index\\tag.html',
      1 => 1456027038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '827656d2f4ef1fe1a3-09203703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2f4ef2c0234_30110933',
  'variables' => 
  array (
    'tag' => 0,
    'row1' => 0,
    'row2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2f4ef2c0234_30110933')) {function content_56d2f4ef2c0234_30110933($_smarty_tpl) {?><!-- 标签 与 日志 推荐 -->
<div class="tags">
	<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
?>
	<div class="tag"><?php echo $_smarty_tpl->tpl_vars['row1']->value['jour_tag'];?>
</div>
	<?php } ?>
</div>
<div class="recommend">
	<!--推荐阅读-->
	<?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag']->value['title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value) {
$_smarty_tpl->tpl_vars['row2']->_loop = true;
?>
	<div class="rec-title"><?php echo $_smarty_tpl->tpl_vars['row2']->value['jour_title'];?>
</div>
	<?php } ?>
</div><?php }} ?>
