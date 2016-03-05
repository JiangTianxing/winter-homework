<?php /* Smarty version Smarty-3.1.16, created on 2016-03-05 02:43:23
         compiled from "..\tpl\index\journal.html" */ ?>
<?php /*%%SmartyHeaderCode:2583756d2ae38585f36-08104131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59ffe7268786d461542c0472b01fa3841e744b83' => 
    array (
      0 => '..\\tpl\\index\\journal.html',
      1 => 1457145613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2583756d2ae38585f36-08104131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d2ae38816755_42027922',
  'variables' => 
  array (
    'jourPaging' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2ae38816755_42027922')) {function content_56d2ae38816755_42027922($_smarty_tpl) {?><!-- 日志分页显示 -->
<div class="journal-collection">
	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jourPaging']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
	<div class="journal-collection">
		<div class="every-journal">
			<div class="jour-information">
				<div class="jour-id" style="display: none"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</div>
				<div class="time"><?php echo substr($_smarty_tpl->tpl_vars['data']->value['jour_time'],6,5);?>
</div>
				<div class="jour-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['jour_title'];?>
</div>
			</div>
			<div class="jour-content"><?php echo substr($_smarty_tpl->tpl_vars['data']->value['jour_content'],0,676);?>
...</div>
			<div class="jour-act">
				<div class="jour-tag"><?php echo $_smarty_tpl->tpl_vars['data']->value['jour_tag'];?>
</div>
				
					<!-- <form action="index.php?method=addlove&pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum'];?>
" method="post">
						<input type="hidden" name="jour_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">					
						<input type="hidden" name="jour_love" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['jour_love']+1;?>
">					
						
						<button type="submit" name="submit"><div class="love-jour" ><?php echo $_smarty_tpl->tpl_vars['data']->value['jour_love'];?>
</div></button>
					</form> -->
					<button onclick="add(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['data']->value['jour_love'];?>
)"><div class="love-jour"><?php echo $_smarty_tpl->tpl_vars['data']->value['jour_love'];?>
</div></button>

				
				<div class="all-jour">
					<a href="index/single.php?jourid=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
&pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum'];?>
" >查看全文</a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['jourPaging']->value['type']==-1) {?>
	<a href="index.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']+1;?>
">下一页</a>
	<a href="index.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['totalNum'];?>
">尾页</a>
	<?php } elseif ($_smarty_tpl->tpl_vars['jourPaging']->value['type']==0) {?>
	<a href="index.php?pagenum=1">首页</a>
	<a href="index.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']-1;?>
">上一页</a>
	<a href="index.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']+1;?>
">下一页</a>
	<a href="index.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['totalNum'];?>
">尾页</a>
	<?php } elseif ($_smarty_tpl->tpl_vars['jourPaging']->value['type']==1) {?>
	<a href="index.php?pagenum=1">首页</a>
	<a href="index.php?pagenum=<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum']-1;?>
">上一页</a>
	<?php } else { ?>
<?php }?>
当前页<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['pageNum'];?>
  总共<?php echo $_smarty_tpl->tpl_vars['jourPaging']->value['totalNum'];?>

</div>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("t.php",
    {
      name:"Donald Duck",
      city:"Duckburg"
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
<!-- 
$(document).ready(function(){
  $("button").click(function(id, love){
    $.post("index.php?method=addlove",
    {
      id: id,
	  love: love
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script> -->
<?php }} ?>
