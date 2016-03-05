<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 06:51:50
         compiled from "..\tpl\index\jour.html" */ ?>
<?php /*%%SmartyHeaderCode:1185556d2b139688c76-27769505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14f2c761971b442b4281dc3cd69083c07cd89ff2' => 
    array (
      0 => '..\\tpl\\index\\jour.html',
      1 => 1457160706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1185556d2b139688c76-27769505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2b1397ab725_02958149',
  'variables' => 
  array (
    'jourInfor' => 0,
    'key' => 0,
    'value' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2b1397ab725_02958149')) {function content_56d2b1397ab725_02958149($_smarty_tpl) {?><!-- 时光轴 -->
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



	<?php echo $_smarty_tpl->getSubTemplate ('index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
?><span style="float: left;"><?php echo substr($_smarty_tpl->tpl_vars['row']->value['jour_time'],5,5);?>
</span>        <a href="single.php?jourid=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&last=jour"><?php echo $_smarty_tpl->tpl_vars['row']->value['jour_title'];?>
   <?php echo $_smarty_tpl->tpl_vars['row']->value['jour_tag'];?>
</a>
<?php } ?>
						</pre>
					</div>
				</li>
				<?php } ?>
			</li>
		</ul>
	</div>




		<script type="text/javascript" src="../img/js/navigation2.js"></script>
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
