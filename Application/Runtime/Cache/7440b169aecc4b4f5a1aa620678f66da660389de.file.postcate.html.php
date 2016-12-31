<?php /* Smarty version Smarty-3.1.6, created on 2015-11-27 17:49:28
         compiled from "./Application/Admin/View\Index\postcate.html" */ ?>
<?php /*%%SmartyHeaderCode:2889256582728ce4368-83379897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7440b169aecc4b4f5a1aa620678f66da660389de' => 
    array (
      0 => './Application/Admin/View\\Index\\postcate.html',
      1 => 1448502911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2889256582728ce4368-83379897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'postcateaddurl' => 0,
    'postcate' => 0,
    'postcatemodifyturl' => 0,
    'postcatesorturl' => 0,
    'postcatedeleteurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56582728d90c6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56582728d90c6')) {function content_56582728d90c6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['postcateaddurl']->value;?>
">
  <table>
  <tr><th colspan='5'>分类目录添加</th></tr>
  <tr>
    <td>名称：</td>
    <td><input name="name" /></td>
    <td>父级：</td>
    <td><select id="pid" name="pid" style="width:100%;">
    <option value="0" selected="selected">顶级</option>
	<?php  $_smarty_tpl->tpl_vars["postcate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["postcate"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['postcateinfo']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["postcate"]->key => $_smarty_tpl->tpl_vars["postcate"]->value){
$_smarty_tpl->tpl_vars["postcate"]->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['postcate']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['postcate']->value[1];?>
</option>
	<?php } ?>
</select></td>
  	<td><input type="submit" name="submit" id="submit" class="button button-primary" value="添加" /></td>
  </tr>
  </table></form>
  
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['postcatemodifyturl']->value;?>
" id="postcatemodify">
  <table>
  <tr><th colspan='5' style="background:#e5f2f7; color:#4d4d4d; border:1px solid #cccccc;">分类目录修改</th></tr>
  <tr>
    <td>名称：</td>
    <td><input id="namemodify" name="name" value='' /></td>
    <td>父级：</td>
    <td><select id="pid" name="pid" style="width:100%;">
    <option value="no" selected="selected">不修改父级</option>
    <option value="0">顶级</option>
	<?php  $_smarty_tpl->tpl_vars["postcate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["postcate"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['postcateinfo']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["postcate"]->key => $_smarty_tpl->tpl_vars["postcate"]->value){
$_smarty_tpl->tpl_vars["postcate"]->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['postcate']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['postcate']->value[1];?>
</option>
	<?php } ?>
</select></td>
  	<td><input style="background:#e5f2f7; color:#4d4d4d; border:1px solid #cccccc;" type="button" id="postcateModifySubmit" class="button button-primary" value="修改" /></td>
  </tr>
  <input type="hidden" id="cidmodify" name='cid' value="0" />
  </table></form>
  
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['postcatesorturl']->value;?>
">
  <table class="postcenter">
  <tr><th>分类ID</th><th>分类名</th><th>父级分类</th><th>排序</th><th>编辑</th><th>删除</th></tr>
  <?php  $_smarty_tpl->tpl_vars["postcate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["postcate"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['postcateinfo']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["postcate"]->key => $_smarty_tpl->tpl_vars["postcate"]->value){
$_smarty_tpl->tpl_vars["postcate"]->_loop = true;
?>
  <tr>
 <td><?php echo $_smarty_tpl->tpl_vars['postcate']->value[0];?>
</td>
 <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['postcate']->value[1];?>
</td>
 <td><?php if ($_smarty_tpl->tpl_vars['postcate']->value[2]==0){?>TOP<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['postcate']->value[2];?>
<?php }?></td>
 <td><input type="text" size="2" value="<?php echo $_smarty_tpl->tpl_vars['postcate']->value[4];?>
" name="sort[<?php echo $_smarty_tpl->tpl_vars['postcate']->value[0];?>
]" /></td>
 <td><a class="postcatemodify" cid="<?php echo $_smarty_tpl->tpl_vars['postcate']->value[0];?>
" cname="<?php echo $_smarty_tpl->tpl_vars['postcate']->value[3];?>
" title="修改'<?php echo $_smarty_tpl->tpl_vars['postcate']->value[3];?>
'"><img src="/images/admin/edit.gif" /></a></td>
 <td><a href="<?php echo $_smarty_tpl->tpl_vars['postcatedeleteurl']->value;?>
?cid=<?php echo $_smarty_tpl->tpl_vars['postcate']->value[0];?>
" title="删除'<?php echo $_smarty_tpl->tpl_vars['postcate']->value[3];?>
'"><img src="/images/admin/delete.gif" /></a></td>
  </tr>
  <?php } ?>
  </table>
  <input type="submit" value="更新排序" class="button button-primary" id="submit" name="submit">
  </form>
	</div>
</div>
<div class="clear"></div>
</div>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>