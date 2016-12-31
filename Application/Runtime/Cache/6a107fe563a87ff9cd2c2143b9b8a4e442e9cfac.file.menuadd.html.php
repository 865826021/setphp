<?php /* Smarty version Smarty-3.1.6, created on 2015-11-30 15:38:18
         compiled from "./Application/Admin/View\Index\menuadd.html" */ ?>
<?php /*%%SmartyHeaderCode:11593565bd159838073-56011554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a107fe563a87ff9cd2c2143b9b8a4e442e9cfac' => 
    array (
      0 => './Application/Admin/View\\Index\\menuadd.html',
      1 => 1448868967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11593565bd159838073-56011554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565bd1598ebcd',
  'variables' => 
  array (
    'menulinowurl' => 0,
    'menucatenow' => 0,
    'menucate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565bd1598ebcd')) {function content_565bd1598ebcd($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form method="post" id="menuadd">
	<div title="文章列表" data-icon="&#x4a;" aria-hidden="true" class="fonts3 huishou"><a href="<?php echo $_smarty_tpl->tpl_vars['menulinowurl']->value;?>
">查看菜单列表</a></div>
  <table>
  <tr><th colspan='2'>添加菜单</th></tr>
  <tr>
    <td>名称：</td>
    <td><input type="text" name="name" id="name" size="33" /></td>
  </tr>
  <tr>
    <td>分类：</td>
    <td><select name="cid">
	<?php  $_smarty_tpl->tpl_vars["menucate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menucate"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['menucateinfo']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menucate"]->key => $_smarty_tpl->tpl_vars["menucate"]->value){
$_smarty_tpl->tpl_vars["menucate"]->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['menucatenow']->value['id']==$_smarty_tpl->tpl_vars['menucate']->value['id']){?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['menucate']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['menucate']->value['name'];?>
</option>
	<?php }else{ ?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['menucate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menucate']->value['name'];?>
</option>
	<?php }?>
	<?php } ?>
</select></td>
  </tr>
  <tr>
    <td>超链接：</td>
    <td><textarea cols="25" name="url">#</textarea></td>
  </tr>
  <tr>
    <td align="right" colspan="2">
    <input type="submit" value="添加" class="button button-primary" id="submit" name="submit" />
    </td>
  </tr></table></form>

  
	</div>
</div>
<div class="clear"></div>
</div>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>