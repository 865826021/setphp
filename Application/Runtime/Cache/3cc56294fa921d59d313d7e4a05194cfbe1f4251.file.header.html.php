<?php /* Smarty version Smarty-3.1.6, created on 2015-12-01 14:28:52
         compiled from "D:\WWW\setphp\Application\Admin\View\Index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:15628565822ee6d6425-77244088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc56294fa921d59d313d7e4a05194cfbe1f4251' => 
    array (
      0 => 'D:\\WWW\\setphp\\Application\\Admin\\View\\Index\\header.html',
      1 => 1448951330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15628565822ee6d6425-77244088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565822ee6fb65',
  'variables' => 
  array (
    'navSelectNo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565822ee6fb65')) {function content_565822ee6fb65($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>administrator</title>
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_URL;?>
/admin.css" />
<link rel="stylesheet" href="<?php echo @ADMIN_URL;?>
/fonts.css" />
<!--[if lte IE 7]><script src="./js/lte-ie7.js"></script><![endif]-->
</head>
<script type="text/javascript" laguage="javascript">
var navSelectNo=<?php if ($_smarty_tpl->tpl_vars['navSelectNo']->value){?><?php echo $_smarty_tpl->tpl_vars['navSelectNo']->value;?>
<?php }else{ ?>0<?php }?>;
</script>
<body>


<div class="head">
<div class="pubw">
<div class="a">SETPHP后台管理系统 - 基础版 - version2.0</div>
<div class="b">
<div class="ba">您好，ADMINISTRATOR</div>
<div class="bb"><div class="fonts1" aria-hidden="true" data-icon="&#x3d;" title="安全退出"></div></div>
</div>
</div>
</div><?php }} ?>