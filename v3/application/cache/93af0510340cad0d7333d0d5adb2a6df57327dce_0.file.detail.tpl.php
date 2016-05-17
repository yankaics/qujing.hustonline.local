<?php
/* Smarty version 3.1.29, created on 2016-05-17 22:17:43
  from "/usr/local/var/www/frame.hustonline.local/application/views/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573b280789c9a8_10520841',
  'file_dependency' => 
  array (
    '93af0510340cad0d7333d0d5adb2a6df57327dce' => 
    array (
      0 => '/usr/local/var/www/frame.hustonline.local/application/views/detail.tpl',
      1 => 1463494661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573b280789c9a8_10520841 ($_smarty_tpl) {
?>
<div class="main" id="body-pc-box">
   <div class="hj-item">
        <div class="hj-avatar-wrap">
            <img class="hj-avatar" src="/resource/<?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['avatar'];?>
" alt="头像"/>

        </div>
        <p class="head">
            <span class="hj-name"><?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['name'];?>
</span> <span class="hj-title"><?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['title'];?>
</span>
        </p>
        <p class="hj-skill">
            <?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['skill_intro'];?>

        </p>
        <p class="hj-info clf">
            <span class="hj-num left"><?php if (!$_smarty_tpl->tpl_vars['helper_detail']->value['num']) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['helper_detail']->value['num'];
}?>人想见</span>
            <span class="hj-price-wrap right">
                <span class="hj-price">￥<?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['skill_price'];?>
</span>
                <span class="hj-time">/<?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['skill_time'];?>
小时</span>
            </span>
        </p>
        <p class="hj-detail-wrap clf"> </p>
    </div>

    <div class="intro-content">
        <p class="detail-header">个人简介</p>
        <p><?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['person_intro'];?>
</p>
        <p class="detail-header">主题简介</p>
        <p><?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['subject_intro'];?>
</p>
        <p class="warn-word">关注公众号【华科学习帝】，查看更多主题。</p>
    </div>
    <a href="/index/reserve/<?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['id'];?>
"><div class="bottom-bar">报名约见</div></a>
</div><?php }
}
