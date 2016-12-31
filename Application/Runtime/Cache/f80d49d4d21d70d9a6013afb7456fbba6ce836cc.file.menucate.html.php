<?php /* Smarty version Smarty-3.1.6, created on 2015-11-27 17:35:21
         compiled from "./Application/Admin/View\Index\menucate.html" */ ?>
<?php /*%%SmartyHeaderCode:25188565823d99503f4-11592971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80d49d4d21d70d9a6013afb7456fbba6ce836cc' => 
    array (
      0 => './Application/Admin/View\\Index\\menucate.html',
      1 => 1448606819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25188565823d99503f4-11592971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menucateaddurl' => 0,
    'menucatemodifyurl' => 0,
    'cate' => 0,
    'menucatedeleteurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565823d99ca9b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565823d99ca9b')) {function content_565823d99ca9b($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['menucateaddurl']->value;?>
">
  <table>
  <tr><th colspan='5'>菜单分类添加</th></tr>
  <tr>
    <td>名称：</td>
    <td><input name="name" /></td>
  	<td><input type="submit" name="submit" id="submit" class="button button-primary" value="添加" /></td>
  </tr>
  </table></form>
  
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['menucatemodifyurl']->value;?>
" id="postcatemodify">
  <table>
  <tr><th colspan='5' style="background:#e5f2f7; color:#4d4d4d; border:1px solid #cccccc;">菜单分类名称修改</th></tr>
  <tr>
    <td>名称：</td>
    <td><input id="namemodify" name="name" value='' /></td>
  	<td><input style="background:#e5f2f7; color:#4d4d4d; border:1px solid #cccccc;" type="button" id="postcateModifySubmit" class="button button-primary" value="修改" /></td>
  </tr>
  <input type="hidden" id="cidmodify" name='cid' value="0" />
  </table></form>
  

  <table class="postcenter">
  <tr><th>分类ID</th><th>分类名</th><th>编辑</th><th>删除</th></tr>
  <?php  $_smarty_tpl->tpl_vars["cate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cate"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['menucate']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cate"]->key => $_smarty_tpl->tpl_vars["cate"]->value){
$_smarty_tpl->tpl_vars["cate"]->_loop = true;
?>
  <tr>
 <td><?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
</td>
 <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</td>
 <td><a class="postcatemodify" cid="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
" cname="<?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
" title="修改'<?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
'"><img src="/images/admin/edit.gif" /></a></td>
 <td><a href="<?php echo $_smarty_tpl->tpl_vars['menucatedeleteurl']->value;?>
?cid=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
" title="删除'<?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
'"><img src="/images/admin/delete.gif" /></a></td>
  </tr>
  <?php } ?>
  </table>
	</div>
</div>
<div class="clear"></div>
</div>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>