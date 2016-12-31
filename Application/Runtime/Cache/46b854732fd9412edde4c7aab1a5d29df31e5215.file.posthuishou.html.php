<?php /* Smarty version Smarty-3.1.6, created on 2015-12-01 15:51:57
         compiled from "./Application/Admin/View\Index\posthuishou.html" */ ?>
<?php /*%%SmartyHeaderCode:9059565d519d9e1592-80288286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46b854732fd9412edde4c7aab1a5d29df31e5215' => 
    array (
      0 => './Application/Admin/View\\Index\\posthuishou.html',
      1 => 1448596461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9059565d519d9e1592-80288286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'postallurl' => 0,
    'post' => 0,
    'posthuishouurl' => 0,
    'pageli' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565d519dad5f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565d519dad5f5')) {function content_565d519dad5f5($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form method="get">
	<div title="文章列表" data-icon="&#x4a;" aria-hidden="true" class="fonts3 huishou"><a href="<?php echo $_smarty_tpl->tpl_vars['postallurl']->value;?>
">返回全部文章列表</a></div>
<table class="postcenter">
	<tr><th>文章ID</th><th>标题</th><th>作者</th><th>分类目录</th><th>日期</th><th>恢复</th><th>彻底删除</th></tr>
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
	  <td><a title="恢复'<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
'" href="<?php echo $_smarty_tpl->tpl_vars['posthuishouurl']->value;?>
?state=1&id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><img src="/images/admin/run.gif" /></a></td>
	  <td><a title="彻底删除'<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
'" href="<?php echo $_smarty_tpl->tpl_vars['posthuishouurl']->value;?>
?state=2&id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><img src="/images/admin/delete.gif" /></a></td>
	</tr>
	<?php } ?>
</table></form>
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