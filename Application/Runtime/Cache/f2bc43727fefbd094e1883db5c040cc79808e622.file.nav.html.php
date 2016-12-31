<?php /* Smarty version Smarty-3.1.6, created on 2015-11-27 17:31:26
         compiled from "D:\WWW\setphp\Application\Admin\View\Index\nav.html" */ ?>
<?php /*%%SmartyHeaderCode:25969565822ee7f00f9-59890820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2bc43727fefbd094e1883db5c040cc79808e622' => 
    array (
      0 => 'D:\\WWW\\setphp\\Application\\Admin\\View\\Index\\nav.html',
      1 => 1448523584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25969565822ee7f00f9-59890820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboardurl' => 0,
    'controllerName' => 0,
    'postcatenow' => 0,
    'postallurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565822ee81047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565822ee81047')) {function content_565822ee81047($_smarty_tpl) {?><div class="nav">
	<ul>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['dashboardurl']->value;?>
">Dashboard</a></li>
	<li>&gt;&nbsp;<a href="javascript:void(0)"><?php if ($_smarty_tpl->tpl_vars['controllerName']->value){?><?php echo $_smarty_tpl->tpl_vars['controllerName']->value;?>
<?php }else{ ?>undefined<?php }?></a></li>
	<?php if ($_smarty_tpl->tpl_vars['postcatenow']->value){?>
	<li>&gt;&nbsp;<a title="分类ID:<?php echo $_smarty_tpl->tpl_vars['postcatenow']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['postallurl']->value;?>
?pid=<?php echo $_smarty_tpl->tpl_vars['postcatenow']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['postcatenow']->value['name'];?>
</a></li>
	<?php }?>
	</ul>
	</div><?php }} ?>