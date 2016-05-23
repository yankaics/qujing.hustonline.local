<?php
/* Smarty version 3.1.29, created on 2016-05-23 20:44:43
  from "/usr/local/var/www/qujing.hustonline.local/application/views/reserve.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5742fb3bc71b65_66624775',
  'file_dependency' => 
  array (
    '006dbe1e01e1eaa9909f5ae0a3a3fba79931c6f9' => 
    array (
      0 => '/usr/local/var/www/qujing.hustonline.local/application/views/reserve.tpl',
      1 => 1463471425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5742fb3bc71b65_66624775 ($_smarty_tpl) {
?>
<div class="main" id="body-pc-box">
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
    <div class="bottom-bar" id="register-button" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">确定报名</div>

</div><?php }
}
