<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 03:56:28
         compiled from "tpl\admin\journal.html" */ ?>
<?php /*%%SmartyHeaderCode:2706656d2efb25259c2-50473848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38cf7c6dc73115bd314312fabb7421ee1616bee0' => 
    array (
      0 => 'tpl\\admin\\journal.html',
      1 => 1457150184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2706656d2efb25259c2-50473848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2efb27982b3_46637620',
  'variables' => 
  array (
    'jourPaging' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2efb27982b3_46637620')) {function content_56d2efb27982b3_46637620($_smarty_tpl) {?><!-- 日志分页显示 -->
<div class="journal-collection">
	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jourPaging']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
	<div class="journal-collection">
		<div class="every-journal">
			<div class="jour-information">
				<div class="time"><?php echo substr($_smarty_tpl->tpl_vars['data']->value['jour_time'],6,5);?>
</div>
				<div class="jour-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['jour_title'];?>
</div>
			</div>
			<div class="jour-content"><?php echo substr($_smarty_tpl->tpl_vars['data']->value['jour_content'],0,530);?>
</div>
			<div class="jour-act">
				<div class="jour-tag"><?php echo $_smarty_tpl->tpl_vars['data']->value['jour_tag'];?>
</div>
				<div class="all-jour">
					<a href="user/single.php?jourid=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
&pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum'];?>
">查看全文</a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['jourPaging']->value['type']==-1) {?>
	<a href="admin.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']+1;?>
">下一页</a>
	<a href="admin.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['totalNum'];?>
">尾页</a>
	<?php } elseif ($_smarty_tpl->tpl_vars['jourPaging']->value['type']==0) {?>
	<a href="admin.php?pagenum=1">首页</a>
	<a href="admin.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']-1;?>
">上一页</a>
	<a href="admin.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']+1;?>
">下一页</a>
	<a href="admin.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['totalNum'];?>
">尾页</a>
	<?php } elseif ($_smarty_tpl->tpl_vars['jourPaging']->value['type']==1) {?>
	<a href="admin.php?pagenum=1">首页</a>
	<a href="admin.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']-1;?>
">上一页</a>
	<?php } else { ?>
<?php }?>
当前页<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum'];?>
  总共<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['totalNum'];?>

</div>
<?php }} ?>
