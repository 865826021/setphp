<?php /* Smarty version Smarty-3.1.6, created on 2015-12-02 11:05:11
         compiled from "./Application/Admin/View\Index\postadd.html" */ ?>
<?php /*%%SmartyHeaderCode:22571565e5fe717e315-76731139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cf8a692dce51661a585201180a5ddb5966c85aa' => 
    array (
      0 => './Application/Admin/View\\Index\\postadd.html',
      1 => 1448609778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22571565e5fe717e315-76731139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'postcatenow' => 0,
    'postcate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565e5fe730cd6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e5fe730cd6')) {function content_565e5fe730cd6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<form enctype="multipart/form-data" method="post" id="postadd">
<table>
  <tr><th colspan='2'>写文章</th></tr>
  <tr>
    <td>标题</td>
    <td><input type="text" name="title" id="title" size="100" /></td>
  </tr>
  
  <tr>
    <td>分类</td>
    <td><select name="pid">
    <?php if ($_smarty_tpl->tpl_vars['postcatenow']->value){?>
    <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['postcatenow']->value['id'];?>
">当前位置：<?php echo $_smarty_tpl->tpl_vars['postcatenow']->value['name'];?>
</option>
    <?php }?>
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
  </tr>
  
  <tr>
    <td>缩略图</td>
    <td><input type="file" name="thumbnail" /></td>
  </tr>
  
  <tr>
    <td>描述</td>
    <td><textarea name="description" cols="75"></textarea></td>
  </tr>
  
  <tr>
    <td valign="top">正文</td>
    <td><script id="editor" name="content" type="text/plain" style="width:860px;height:400px;"></script></td>
  </tr>
  
  <tr>
    <td>超链接</td>
    <td><input type="text" name="url2" size="100" /></td>
  </tr>
  
  <tr>
    <td colspan='2' align="right"><input type="submit" name="submit" id="submit" class="button button-primary" value="添加" /></td>
  </tr>
 </table></form>
	</div>
</div>
<div class="clear"></div>
</div>

</body>
<!-- UEDITOR PLUGINS -->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    window.UEDITOR_HOME_URL = "/plugins/ueditor/";
    var ue = UE.getEditor('editor');
    </script>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>