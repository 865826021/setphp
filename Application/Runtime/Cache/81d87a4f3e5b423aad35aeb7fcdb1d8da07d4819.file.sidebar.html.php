<?php /* Smarty version Smarty-3.1.6, created on 2015-11-30 17:26:17
         compiled from "D:\WWW\setphp\Application\Admin\View\Index\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:12132565822ee7152f7-66283025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d87a4f3e5b423aad35aeb7fcdb1d8da07d4819' => 
    array (
      0 => 'D:\\WWW\\setphp\\Application\\Admin\\View\\Index\\sidebar.html',
      1 => 1448875575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12132565822ee7152f7-66283025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565822ee74508',
  'variables' => 
  array (
    'dashboardurl' => 0,
    'seturl' => 0,
    'postallurl' => 0,
    'postaddurl' => 0,
    'postcateurl' => 0,
    'menuliurl' => 0,
    'menuaddurl' => 0,
    'menucateurl' => 0,
    'userliurl' => 0,
    'useraddurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565822ee74508')) {function content_565822ee74508($_smarty_tpl) {?><div class="left">
	<ul id="ula">
	<li><a id="first" href="<?php echo $_smarty_tpl->tpl_vars['dashboardurl']->value;?>
">SETPHP控制台</a></li>
	<li><a><span class="icon_house_alt fonts2" aria-hidden="true"></span>基本</a>
	<ul id="ulb" style=" display:none;">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['seturl']->value;?>
">基本设置</a></li>
		</ul>
	</li>
	   
	<li><a><span class="icon_document_alt fonts2" aria-hidden="true"></span>文章</a>
		<ul id="ulb" style=" display:none;">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['postallurl']->value;?>
">文章列表</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['postaddurl']->value;?>
">写文章</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['postcateurl']->value;?>
">分类目录</a></li></ul>
	</li>
	
	<li><a><span class="icon_menu-square_alt fonts2" aria-hidden="true"></span>菜单</a>
		<ul id="ulb" style=" display:none;">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['menuliurl']->value;?>
">菜单列表</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['menuaddurl']->value;?>
">添加菜单</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['menucateurl']->value;?>
">菜单分类</a></li></ul>
	</li>
	
	<li><a><span class="icon_group fonts2" aria-hidden="true"></span>用户</a>
		<ul id="ulb" style=" display:none;">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['userliurl']->value;?>
">用户列表</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['useraddurl']->value;?>
">添加用户</a></li></ul>
	</li></ul>
</div><?php }} ?>