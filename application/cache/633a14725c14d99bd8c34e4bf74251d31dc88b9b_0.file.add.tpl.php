<?php
/* Smarty version 3.1.29, created on 2016-05-17 21:47:43
  from "/usr/local/var/www/frame.hustonline.local/application/views/admin/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573b20ff684372_97159695',
  'file_dependency' => 
  array (
    '633a14725c14d99bd8c34e4bf74251d31dc88b9b' => 
    array (
      0 => '/usr/local/var/www/frame.hustonline.local/application/views/admin/add.tpl',
      1 => 1463492524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573b20ff684372_97159695 ($_smarty_tpl) {
?>
<div class="main" id="body-pc-box">
    <div class="input-header">
        填写资料
    </div>
    <div class="input-info" id="input-info">

        <div class="input-label">
            <label for="name">姓名</label><input type="text" id="name" placeholder="如：子矜" name="nickname"/>
        </div>
        <div class="input-label">
            <label for="title">头衔</label><input type="text" id="title" placeholder="如：冰岩作坊成员" name="contact"/>
        </div>
        <div class="input-label">
            <label for="skill_price">收费</label><input type="text" id="skill_price" placeholder="如：50" name="hometown"/>
        </div>
        <div class="input-label">
            <label for="skill_time">时间</label><input type="text" id="skill_time" placeholder="如：2" name="hometown"/>
        </div>
        <div class="input-label">
            <label for="file">头像上传</label><input type="file" id="file" placeholder="如：张三" name="nickname"/>
        </div>
        <div class="input-label text-area">
            <label for="person_intro">个人简介</label><textarea id="person_intro" placeholder="关于报名者的一句话简介" name="condition"></textarea>
        </div>
        <div class="input-label text-area">
            <label for="skill_intro">技能简介</label><textarea id="skill_intro" placeholder="报名者具体的技能简介" name="condition"></textarea>
        </div>
        <div class="input-label text-area">
            <label for="subject_intro">主题简介</label><textarea id="subject_intro" placeholder="主要是分享的经验内容介绍" name="condition"></textarea>
        </div>
    </div>
    <div class="bottom-bar" id="register-button">确定报名</div>
</div><?php }
}
