<?php
/* Smarty version 3.1.29, created on 2016-05-19 14:42:37
  from "/usr/local/var/www/qujing.hustonline.local/application/views/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573d605d3debd8_11597135',
  'file_dependency' => 
  array (
    '5610f968bd2e95232c7de262ebb75150faf5ecca' => 
    array (
      0 => '/usr/local/var/www/qujing.hustonline.local/application/views/index.tpl',
      1 => 1463471441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573d605d3debd8_11597135 ($_smarty_tpl) {
?>
<div class="main" id="body-pc-box">
    <div class="hj-list">
        <?php
$_from = $_smarty_tpl->tpl_vars['helper_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
            <a href="index/helper/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><div class="hj-item">
                    <div class="hj-avatar-wrap">
                        <img class="hj-avatar" src="/resource/<?php echo $_smarty_tpl->tpl_vars['value']->value['avatar'];?>
" alt="头像"/>
                    </div>
                    <p class="head">
                        <span class="hj-name"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</span> <span class="hj-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</span>
                    </p>
                    <p class="hj-skill">
                        <?php echo $_smarty_tpl->tpl_vars['value']->value['skill_intro'];?>

                    </p>
                    <p class="hj-info clf">
                        <span class="hj-num left"><?php if (!$_smarty_tpl->tpl_vars['value']->value['num']) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['value']->value['num'];
}?>人想见</span>
                            <span class="hj-price-wrap right">
                                <span class="hj-price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['skill_price'];?>
</span>
                                <span class="hj-time">/<?php echo $_smarty_tpl->tpl_vars['value']->value['skill_time'];?>
小时</span>
                            </span>
                    </p>
                    <p class="hj-detail-wrap clf">
                        <span class="hj-detail right">查看详情</span>
                    </p>
                </div>
            </a>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
        <?php
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
    </div>
    <div class="bottom-bar">
        <a href="/" class="bottom-button">
            <img src="/resource/img/btn1_active.png" alt="取经">
        </a>
        <a href="/index/intro" class="bottom-button">
            <img src="/resource/img/btn2.png" alt="分享经验">
        </a>
    </div>
</div>
<?php }
}
