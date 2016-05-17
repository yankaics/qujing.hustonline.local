<?php /* Smarty version Smarty-3.1.16, created on 2016-04-23 07:06:21
         compiled from "views/reserve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:392776672571aa7f4c6b257-66063085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68526df6be90860d914a33a4d3874338cf19941' => 
    array (
      0 => 'views/reserve.tpl',
      1 => 1461366379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392776672571aa7f4c6b257-66063085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_571aa7f4c8d449_53780463',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571aa7f4c8d449_53780463')) {function content_571aa7f4c8d449_53780463($_smarty_tpl) {?><div class="main">
    <div class="input-header">
        填写资料
    </div>
    <div class="input-info" id="input-info">
        <div class="input-label">
            <label for="name">姓名</label><input type="text" id="name" placeholder="如：张三" name="nickname"/>
        </div>
        <div class="input-label">
            <label for="gender">性别</label><input type="text" id="gender" placeholder="如：男" name="contact"/>
        </div>
        <div class="input-label">
            <label for="grade">专业年级</label><input type="text" id="grade" placeholder="如：社会学大二" name="grade"/>
        </div>
        <div class="input-label">
            <label for="phone">手机号</label><input type="text" id="phone" placeholder="如：13476179904" name="hometown"/>
        </div>
        <div class="input-label">
            <label for="wechat">微信号</label><input type="text" id="wechat" placeholder="如：cmm020304" name="hometown"/>
        </div>
        <div class="input-label text-area">
            <label for="intro">补充说明</label><textarea id="intro" placeholder="自我介绍与遇到的问题等" name="condition"></textarea>
        </div>
    </div>
    <div class="input-warn text-center">
        此次约见为『有偿』约见
    </div>
    <div class="bottom-bar" id="register-button" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
">确定报名</div>

</div><?php }} ?>
