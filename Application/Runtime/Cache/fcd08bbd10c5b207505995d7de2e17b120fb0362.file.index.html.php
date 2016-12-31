<?php /* Smarty version Smarty-3.1.6, created on 2015-12-01 15:58:50
         compiled from "./Application/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:21988565bc2121bd624-59665505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd08bbd10c5b207505995d7de2e17b120fb0362' => 
    array (
      0 => './Application/Admin/View\\Index\\index.html',
      1 => 1448956726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21988565bc2121bd624-59665505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565bc212330d8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565bc212330d8')) {function content_565bc212330d8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	
	<div class="message">欢迎您使用SETPHP后台管理系统</div>
	<table>
  <tr><th colspan='12'></th></tr>
  <tr>
    <td>Nginx</td>
    <td><font color="green">√</font></td>
    <td>PHP</td>
    <td><font color="green">√</font></td>
    <td>MYSQL</td>
    <td><font color="green">√</font></td>
    <td>Smarty</td>
    <td><font color="green">√</font></td>
    <td>JAVASCRIPT</td>
    <td><font color="green">√</font></td>
    <td>JQUERY</td>
    <td><font color="green">√</font></td>
  </tr>
 </table>
	<div>我们采用SMARTY与TP核心板分离技术最大限度优化了代码运行效率。<br />
	基础版本包含网站基本设置、文章系统无限极分类目录、菜单系统、用户中心架构。<br />
	我们为方便您的创作，基础版不包含后台用户登录和验证，您可以自由发挥开发所需功能。<br />
	(Designed by Sebastian lee 2016)
	</div>

	</div>
</div>
<div class="clear"></div>
</div>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>