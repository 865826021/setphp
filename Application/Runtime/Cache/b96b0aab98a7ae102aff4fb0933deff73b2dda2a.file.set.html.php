<?php /* Smarty version Smarty-3.1.6, created on 2015-11-30 16:03:35
         compiled from "./Application/Admin/View\Index\set.html" */ ?>
<?php /*%%SmartyHeaderCode:24527565c02d7bfa559-19106448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b96b0aab98a7ae102aff4fb0933deff73b2dda2a' => 
    array (
      0 => './Application/Admin/View\\Index\\set.html',
      1 => 1448502919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24527565c02d7bfa559-19106448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_565c02d7cc932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c02d7cc932')) {function content_565c02d7cc932($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main pubw">
<?php echo $_smarty_tpl->getSubTemplate ("./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="right">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="content">
	<div>

<form method="post">
<table class="form-table">
<tbody><tr>
<th scope="row"><label for="webtitle">站点标题（Title）</label></th>
<td><input type="text" class="regular-text" value="<?php echo $_smarty_tpl->tpl_vars['options']->value[0]['val'];?>
" id="webtitle" name="webtitle"></td>
</tr>

<tr>
<th scope="row"><label for="companyname">公司名称（Company）</label></th>
<td><input type="text" class="regular-text" value="<?php echo $_smarty_tpl->tpl_vars['options']->value[1]['val'];?>
" id="companyname" name="companyname"></td>
</tr>

<tr>
<th scope="row"><label for="siteurl">网站地址（URL）</label></th>
<td><input type="url" class="regular-text code" value="<?php echo $_smarty_tpl->tpl_vars['options']->value[2]['val'];?>
" id="siteurl" name="siteurl"></td>
</tr>

<tr>
<th scope="row"><label for="keywords">站点关键字（Keywords）</label></th>
<td>
<textarea rows='5' cols='39' name='keywords'><?php echo $_smarty_tpl->tpl_vars['options']->value[3]['val'];?>
</textarea>

<p id="tagline-description" class="keywords">站点关键字用分隔符分隔（SEO）</p></td>
</tr>

<tr>
<th scope="row"><label for="description">站点描述（Description）</label></th>
<td>
<textarea rows='5' cols='39' name='description'><?php echo $_smarty_tpl->tpl_vars['options']->value[4]['val'];?>
</textarea>

<p id="tagline-description" class="description">用简洁的文字描述本站点（SEO）</p></td>
</tr>

<tr>
<th scope="row"><label for="admin_email">电子邮件地址 </label></th>
<td><input type="email" class="regular-text ltr" value="<?php echo $_smarty_tpl->tpl_vars['options']->value[5]['val'];?>
" aria-describedby="admin-email-description" id="admin_email" name="admin_email">
<p id="admin-email-description" class="description">填写管理员邮箱作为后期功能开发。</p></td>
</tr>



	<tr>
		<th width="33%" scope="row"><label for="LANG">站点语言</label></th>
		<td>
			<select id="LANG" name="LANG"><optgroup label="已安装">
<option data-installed="1" selected="selected">简体中文</option>
</optgroup>
<optgroup label="暂未开发">
<option lang="ar" value="ar">العربية</option>
<option lang="az" value="az">Azərbaycan dili</option>
<option lang="bg" value="bg_BG">Български</option>
<option lang="bn" value="bn_BD">বাংলা</option>
<option lang="bs" value="bs_BA">Bosanski</option>
<option lang="ca" value="ca">Català</option>
<option lang="cy" value="cy">Cymraeg</option>
<option lang="da" value="da_DK">Dansk</option>
<option lang="de" value="de_DE_formal">Deutsch (Sie)</option>
<option lang="de" value="de_CH">Deutsch (Schweiz)</option>
<option lang="de" value="de_DE">Deutsch</option>
<option lang="el" value="el">Ελληνικά</option>
<option lang="en" value="en_CA">English (Canada)</option>
<option lang="en" value="en_AU">English (Australia)</option>
<option lang="en" value="en_NZ">English (New Zealand)</option>
<option lang="en" value="en_GB">English (UK)</option>
<option lang="eo" value="eo">Esperanto</option>
<option lang="es" value="es_MX">Español de México</option>
<option lang="es" value="es_CL">Español de Chile</option>
<option lang="es" value="es_PE">Español de Perú</option>
<option lang="es" value="es_ES">Español</option>
<option lang="es" value="es_CO">Español de Colombia</option>
<option lang="et" value="et">Eesti</option>
<option lang="eu" value="eu">Euskara</option>
<option lang="fa" value="fa_IR">فارسی</option>
<option lang="fi" value="fi">Suomi</option>
<option lang="fr" value="fr_FR">Français</option>
<option lang="gd" value="gd">Gàidhlig</option>
<option lang="gl" value="gl_ES">Galego</option>
<option lang="haz" value="haz">هزاره گی</option>
<option lang="he" value="he_IL">עִבְרִית</option>
<option lang="hr" value="hr">Hrvatski</option>
<option lang="hu" value="hu_HU">Magyar</option>
<option lang="hy" value="hy">Հայերեն</option>
<option lang="id" value="id_ID">Bahasa Indonesia</option>
<option lang="is" value="is_IS">Íslenska</option>
<option lang="it" value="it_IT">Italiano</option>
<option lang="ja" value="ja">日本語</option>
<option lang="ko" value="ko_KR">한국어</option>
<option lang="lt" value="lt_LT">Lietuvių kalba</option>
<option lang="nb" value="nb_NO">Norsk bokmål</option>
<option lang="nl" value="nl_NL">Nederlands</option>
<option lang="nn" value="nn_NO">Norsk nynorsk</option>
<option lang="oc" value="oci">Occitan</option>
<option lang="pl" value="pl_PL">Polski</option>
<option lang="ps" value="ps">پښتو</option>
<option lang="pt" value="pt_PT">Português</option>
<option lang="pt" value="pt_BR">Português do Brasil</option>
<option lang="ro" value="ro_RO">Română</option>
<option lang="ru" value="ru_RU">Русский</option>
<option lang="sk" value="sk_SK">Slovenčina</option>
<option lang="sl" value="sl_SI">Slovenščina</option>
<option lang="sq" value="sq">Shqip</option>
<option lang="sr" value="sr_RS">Српски језик</option>
<option lang="sv" value="sv_SE">Svenska</option>
<option lang="th" value="th">ไทย</option>
<option lang="tl" value="tl">Tagalog</option>
<option lang="tr" value="tr_TR">Türkçe</option>
<option lang="ug" value="ug_CN">Uyƣurqə</option>
<option lang="uk" value="uk">Українська</option>
<option lang="zh" value="zh_TW">繁體中文</option>
<option lang="zh" value="zh_CN">简体中文</option>
<option lang="en" value="en_US">English</option>

</optgroup></select>		</td>
	</tr>
	</tbody></table>

<p class="submit">
<input type="submit" value="保存更改" class="button button-primary" id="submit" name="submit">
</p></form>
	
	</div>
	</div>
</div>
<div class="clear"></div>
</div>

</body>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>