<?php /* Smarty version Smarty-3.1.16, created on 2016-04-23 05:11:13
         compiled from "views/layout/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:490047668571a921bebcc01-35095498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2897591876103c94bd2cf4ec11f8f74f523131f' => 
    array (
      0 => 'views/layout/default.tpl',
      1 => 1461359469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '490047668571a921bebcc01-35095498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_571a921bf3d8b8_06579632',
  'variables' => 
  array (
    'css_list' => 0,
    'css' => 0,
    'js_list' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a921bf3d8b8_06579632')) {function content_571a921bf3d8b8_06579632($_smarty_tpl) {?><!DOCTYPE html>
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

        <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
        <link rel="stylesheet" href="/static/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"/>
        <?php } ?>

        <div style="display:none">
            <img src="/resource/img/icon.png" alt="分享图标">
        </div>
    </head>
    <body id="body-pc-box">

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['CONTENT']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <script src="/static/dist/lib/zepto.min.js"></script>

        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
            <script src="/static/dist/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
        <?php } ?>
        <!-- cnzz数据统计 -->
        <div style="display:none">
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258124905'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1258124905' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
    </body>
</html><?php }} ?>
