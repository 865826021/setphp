<?php /* Smarty version Smarty-3.1.6, created on 2015-11-30 18:26:00
         compiled from "./Application/Admin/View\Index\useradd.html" */ ?>
<?php /*%%SmartyHeaderCode:22237565c163c364d11-02113415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52380ddb91dd6c29d798c77f0cd4f812d50f3688' => 
    array (
      0 => './Application/Admin/View\\Index\\useradd.html',
      1 => 1448879159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22237565c163c364d11-02113415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565c163c3dbcd',
  'variables' => 
  array (
    'userliurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c163c3dbcd')) {function content_565c163c3dbcd($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form method="post" id="useradd">
	<div title="文章列表" data-icon="&#x4a;" aria-hidden="true" class="fonts3 huishou"><a href="<?php echo $_smarty_tpl->tpl_vars['userliurl']->value;?>
">查看用户列表</a></div>
  <table>
  <tr><th colspan='2'>添加用户</th></tr>
  <tr>
    <td>手机：</td>
    <td><input type="text" name="phone" id="phone" size="39" /></td>
  </tr>
  
  <tr>
    <td>密码：</td>
    <td><input type="text" name="password" id="password" size="39" /></td>
  </tr>
  
  <tr>
    <td>昵称：</td>
    <td><input type="text" name="name" id="name" size="39" /></td>
  </tr>
  
  
  
  <tr>
    <td>电子邮箱：</td>
    <td><input type="text" name="email" id="email" size="39" /></td>
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