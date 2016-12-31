<?php /* Smarty version Smarty-3.1.6, created on 2015-11-30 15:27:21
         compiled from "./Application/Admin/View\Index\menuli.html" */ ?>
<?php /*%%SmartyHeaderCode:21599565822ee5e0cb8-45235089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e53e96ad1d8f36becd4cea4f940caa679cc894b9' => 
    array (
      0 => './Application/Admin/View\\Index\\menuli.html',
      1 => 1448868417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21599565822ee5e0cb8-45235089',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565822ee68f30',
  'variables' => 
  array (
    'menuliurl' => 0,
    'menucatenow' => 0,
    'menucate' => 0,
    'menulimodifyurl' => 0,
    'menulisorturl' => 0,
    'menu' => 0,
    'menulideleteurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565822ee68f30')) {function content_565822ee68f30($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['menuliurl']->value;?>
">
	<table align="center">
  <tr><th colspan='3'>菜单分类</th></tr>
  <tr>
    <td>分类：</td>
    <td><select name="cid">
    <?php if ($_smarty_tpl->tpl_vars['menucatenow']->value){?>
    <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['menucatenow']->value['id'];?>
">当前位置：<?php echo $_smarty_tpl->tpl_vars['menucatenow']->value['name'];?>
</option>
    <?php }?>
<?php  $_smarty_tpl->tpl_vars["menucate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menucate"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['menucateinfo']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menucate"]->key => $_smarty_tpl->tpl_vars["menucate"]->value){
$_smarty_tpl->tpl_vars["menucate"]->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['menucate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menucate']->value['name'];?>
</option>
<?php } ?>
</select></td>
    <td><input type="submit" value="查询"></td>
  </tr>
</table></form>
  
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['menulimodifyurl']->value;?>
" id="menulimodify">
  <table>
  <tr><th colspan='5' style="background:#e5f2f7; color:#4d4d4d; border:1px solid #cccccc;">菜单信息修改</th></tr>
  <tr>
    <td>名称：</td>
    <td><input id="namemodify" name="name" value='' /></td>
    <td>所属分类：</td>
    <td><select id="cid" name="cid" style="width:100%;">
    <option value="no" selected="selected">不修改所属分类</option>
<?php  $_smarty_tpl->tpl_vars["menucate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menucate"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['menucateinfo']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menucate"]->key => $_smarty_tpl->tpl_vars["menucate"]->value){
$_smarty_tpl->tpl_vars["menucate"]->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['menucate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menucate']->value['name'];?>
</option>
<?php } ?>
</select></td>
  	<td></td>
  </tr>
  <tr><td>超链接：</td>
  <td colspan="3"><input type="text" id="urlmodify" name="urlmodify" size="60" value="" /></td>
  <td><input style="background:#e5f2f7; color:#4d4d4d; border:1px solid #cccccc;" type="button" id="menuliModifySubmit" class="button button-primary" value="修改" /></td>
  </tr>
  <input type="hidden" id="idmodify" name='id' value="0" />
  <input type="hidden" name='getcid' value="<?php if ($_GET['cid']){?><?php echo $_GET['cid'];?>
<?php }else{ ?>1<?php }?>" />
  </table></form>
  
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['menulisorturl']->value;?>
">
  <table class="postcenter">
  <tr><th>菜单ID</th><th>菜单名</th><th>所属分类</th><th>超链接</th><th>排序</th><th>编辑</th><th>删除</th></tr>
  <?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['menuli']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value){
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
  <tr>
 <td><?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</td>
 <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['menu']->value['pinfo']['name'];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
</td>
 <td><input type="text" size="2" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['sort'];?>
" name="sort[<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
]" /></td>
 <td><a class="menulimodify" id="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
" url="<?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
" title="修改'<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
'"><img src="/images/admin/edit.gif" /></a></td>
 <td><a href="<?php echo $_smarty_tpl->tpl_vars['menulideleteurl']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" title="删除'<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
'"><img src="/images/admin/delete.gif" /></a></td>
  </tr>
  <?php } ?>
  </table>
  <input type="hidden" value="<?php if ($_GET['cid']){?><?php echo $_GET['cid'];?>
<?php }else{ ?>1<?php }?>" name="cid" />
  <input type="submit" value="更新排序" class="button button-primary" id="submit" name="submit">
  </form>
	</div>
</div>
<div class="clear"></div>
</div>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>