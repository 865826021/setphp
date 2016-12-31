<?php /* Smarty version Smarty-3.1.6, created on 2015-11-27 17:49:24
         compiled from "./Application/Admin/View\Index\postall.html" */ ?>
<?php /*%%SmartyHeaderCode:33235658272469a0a3-13360378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22531f2ee997d35d5028b4cbad2a6f7440e4f831' => 
    array (
      0 => './Application/Admin/View\\Index\\postall.html',
      1 => 1448597901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33235658272469a0a3-13360378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'postallurl' => 0,
    'postcatenow' => 0,
    'postcate' => 0,
    'posthuishouurl' => 0,
    'post' => 0,
    'postmodifyurl' => 0,
    'postdeleteurl' => 0,
    'pageli' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56582724756c7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56582724756c7')) {function content_56582724756c7($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['postallurl']->value;?>
">
	<table align="center">
  <tr><th colspan='3'>分类目录</th></tr>
  <tr>
    <td>分类：</td>
    <td><select name="pid">
    <?php if ($_smarty_tpl->tpl_vars['postcatenow']->value){?>
    <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['postcatenow']->value['id'];?>
">当前位置：<?php echo $_smarty_tpl->tpl_vars['postcatenow']->value['name'];?>
</option>
    <?php }?>
<option value="0">全部</option>
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
<input type="hidden" name="p" value="1" />
    <td><input type="submit" value="查询"></td>
  </tr>
</table></form>
	<div title="文章回收站" data-icon="&#xe07d;" aria-hidden="true" class="fonts3 huishou"><a href="<?php echo $_smarty_tpl->tpl_vars['posthuishouurl']->value;?>
">文章回收站</a></div>
<table class="postcenter">
	<tr><th>文章ID</th><th>标题</th><th>作者</th><th>分类目录</th><th>日期</th><th>编辑</th><th>删除</th></tr>
	<?php  $_smarty_tpl->tpl_vars["post"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["post"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['postli']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["post"]->key => $_smarty_tpl->tpl_vars["post"]->value){
$_smarty_tpl->tpl_vars["post"]->_loop = true;
?>
	<tr>
	  <td><?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
</td>
	  <td><a title="文章ID:<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></td>
	  <td><?php echo $_smarty_tpl->tpl_vars['post']->value['author'];?>
</td>
	  <td><a title="分类ID:<?php echo $_smarty_tpl->tpl_vars['post']->value['pid'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['postallurl']->value;?>
?pid=<?php echo $_smarty_tpl->tpl_vars['post']->value['pid'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['pinfo']['name'];?>
</a></td>
	  <td><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</td>
	  <td><a title="编辑'<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
'" href="<?php echo $_smarty_tpl->tpl_vars['postmodifyurl']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><img src="/images/admin/edit.gif" /></a></td>
	  <td><a title="删除'<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
'" href="<?php echo $_smarty_tpl->tpl_vars['postdeleteurl']->value;?>
?delid=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
<?php if ($_GET['pid']){?>&pid=<?php echo $_GET['pid'];?>
<?php }?>"><img src="/images/admin/delete.gif" /></a></td>
	</tr>
	<?php } ?>
</table>
<?php if ($_smarty_tpl->tpl_vars['pageli']->value){?> 
<div class="pagination"><?php echo $_smarty_tpl->tpl_vars['pageli']->value;?>
                      	 
</div><?php }?>
	</div>
</div>
<div class="clear"></div>
</div>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>