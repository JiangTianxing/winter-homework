<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 04:14:56
         compiled from "..\tpl\admin\jour.html" */ ?>
<?php /*%%SmartyHeaderCode:1035656d3d10fb3cff5-50086517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1852772d651bc45b163b5927ff1cf25e9a3871f5' => 
    array (
      0 => '..\\tpl\\admin\\jour.html',
      1 => 1457151293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1035656d3d10fb3cff5-50086517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d3d10fc0a353_32697714',
  'variables' => 
  array (
    'jourInfor' => 0,
    'key' => 0,
    'value' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3d10fc0a353_32697714')) {function content_56d3d10fc0a353_32697714($_smarty_tpl) {?><!-- 时光轴 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jour</title>
	<link rel="stylesheet" type="text/css" href="../img/css/navigation.css">
	<style type="text/css">
        .jour {
	width: 1200px;
	height: auto;
	margin: 0 auto;
	display: block;
	position: relative;
}
    ul.timeline {
	list-style-type: none;
	background: url("../img/image/line.png") repeat-y scroll 80px 0 transparent;
	margin: 50px 0;
	padding: 0;
}
ul.timeline li {
	position: relative;
	margin-bottom: 20px;
}
ul.timeline li .time-number {
	position: absolute;
	background: url("../img/image/dot.png") no-repeat scroll 0 0 transparent;
	width: 56px;
	height: 56px;
	left: 57px;
	line-height: 56px;
	text-align: center;
	color: #fff;
	font-size: 18px;
	border-radius: 28px;
}
ul.timeline li .scontent {
	margin-left: 180px;
	position: relative;
	margin-top: 50px;
}
ul.timeline li .scontent pre {
	background-color: #99ccff;
	text-align: left;
	padding: 20px;
	color: #fff;
	font-size: 13px;
	line-height: 20px;
}
	</style>
</head>
<body>



	<?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="jour">
		<ul class="timeline">
			<li>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jourInfor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li>
					<div class="time-number"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</div>
					<div class="scontent">
						<pre>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><span style="float: left"><?php echo substr($_smarty_tpl->tpl_vars['row']->value['jour_time'],5,5);?>
</span>    <a href="single.php?jourid=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&last=jour"><?php echo $_smarty_tpl->tpl_vars['row']->value['jour_title'];?>
   (<?php echo $_smarty_tpl->tpl_vars['row']->value['jour_tag'];?>
)  </a>  <div style="float: right"><a href="jour.php?method=deleteJour&jour_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">删除</a>  <a href="modify.php?method=modifydisplay&jour_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">修改</a></div>
<?php } ?>
						</pre>
					</div>
				</li>
				<?php } ?>
			</li>
		</ul>
	</div>




		<script type="text/javascript" src="../img/js/anavigation2.js"></script>
		<script type="text/javascript">
	$(function(){
	var liNodes = $('ul.timeline li'), cout = liNodes.length,i,liNode;
	for (i = 0; i < cout; i++) {
		liNode = $(liNodes.get(i));
		liNode.find('.time-number').text(count-i);
	};
});
</script></body>
	</html><?php }} ?>
