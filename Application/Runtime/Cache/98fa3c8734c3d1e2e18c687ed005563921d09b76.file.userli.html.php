<?php /* Smarty version Smarty-3.1.6, created on 2015-12-01 12:06:15
         compiled from "./Application/Admin/View\Index\userli.html" */ ?>
<?php /*%%SmartyHeaderCode:16463565c1db809df31-00167377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98fa3c8734c3d1e2e18c687ed005563921d09b76' => 
    array (
      0 => './Application/Admin/View\\Index\\userli.html',
      1 => 1448942772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16463565c1db809df31-00167377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565c1db80e6af',
  'variables' => 
  array (
    'i' => 0,
    'pageli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c1db80e6af')) {function content_565c1db80e6af($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
<table>
  <tr>
  	<th>UID</th>
  	<th>手机</th>
	<th>昵称</th>
	<th>电子邮箱</th>
	<th>注册时间</th>
	<th>最后登录IP</th>
	<th>登录时间</th>
</tr>
<?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_from = ($_smarty_tpl->tpl_vars['users']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value){
$_smarty_tpl->tpl_vars["i"]->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['i']->value['name']){?><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
<?php }else{ ?>无<?php }?></td>
    <td><?php if ($_smarty_tpl->tpl_vars['i']->value['email']){?><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
<?php }else{ ?>无<?php }?></td>
    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['register_time'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['i']->value['login_ip']){?><?php echo $_smarty_tpl->tpl_vars['i']->value['login_ip'];?>
<?php }else{ ?>无<?php }?></td>
    <td><?php if ($_smarty_tpl->tpl_vars['i']->value['login_time']){?><?php echo $_smarty_tpl->tpl_vars['i']->value['login_time'];?>
<?php }else{ ?>无<?php }?></td>
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