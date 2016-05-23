<?php
/* Smarty version 3.1.29, created on 2016-05-24 02:18:46
  from "/usr/local/var/www/qujing.hustonline.local/application/views/layout/default.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57434986c84689_53337377',
  'file_dependency' => 
  array (
    '4e50f25ee65b0f7470e49464f1bac09721d2a711' => 
    array (
      0 => '/usr/local/var/www/qujing.hustonline.local/application/views/layout/default.tpl',
      1 => 1464027518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57434986c84689_53337377 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <title>取经——华科校内一对一交流平台</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta content="telephone=no" name="format-detection" />

        <?php
$_from = $_smarty_tpl->tpl_vars['css_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_css_0_saved_item = isset($_smarty_tpl->tpl_vars['css']) ? $_smarty_tpl->tpl_vars['css'] : false;
$_smarty_tpl->tpl_vars['css'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['css']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
$__foreach_css_0_saved_local_item = $_smarty_tpl->tpl_vars['css'];
?>
        <link rel="stylesheet" href="/resource/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"/>
        <?php
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_0_saved_local_item;
}
if ($__foreach_css_0_saved_item) {
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_0_saved_item;
}
?>

        <div style="display:none">
            <img src="/resource/img/icon.png" alt="分享图标">
        </div>
    </head>
    <body>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['CONTENT']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        <?php echo '<script'; ?>
 src="/resource/dist/lib/zepto.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/resource/test.js"><?php echo '</script'; ?>
>
        <?php
$_from = $_smarty_tpl->tpl_vars['js_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_js_1_saved_item = isset($_smarty_tpl->tpl_vars['js']) ? $_smarty_tpl->tpl_vars['js'] : false;
$_smarty_tpl->tpl_vars['js'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['js']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
$__foreach_js_1_saved_local_item = $_smarty_tpl->tpl_vars['js'];
?>
            <?php echo '<script'; ?>
 src="/resource/dist/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
        <?php
$_smarty_tpl->tpl_vars['js'] = $__foreach_js_1_saved_local_item;
}
if ($__foreach_js_1_saved_item) {
$_smarty_tpl->tpl_vars['js'] = $__foreach_js_1_saved_item;
}
?>
        <!-- cnzz数据统计 -->
        <div style="display:none">
            <?php echo '<script'; ?>
 type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258124905'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1258124905' type='text/javascript'%3E%3C/script%3E"));<?php echo '</script'; ?>
>
        </div>
    </body>
</html><?php }
}
