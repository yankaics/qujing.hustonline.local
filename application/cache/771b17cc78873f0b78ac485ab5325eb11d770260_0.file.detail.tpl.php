<?php
/* Smarty version 3.1.29, created on 2016-05-17 22:18:14
  from "/usr/local/var/www/frame.hustonline.local/application/views/admin/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573b282691b672_26394638',
  'file_dependency' => 
  array (
    '771b17cc78873f0b78ac485ab5325eb11d770260' => 
    array (
      0 => '/usr/local/var/www/frame.hustonline.local/application/views/admin/detail.tpl',
      1 => 1463474060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573b282691b672_26394638 ($_smarty_tpl) {
?>
<div class="main">
    <div class="detail-list-wrap">
        <p class="header">想约见『<?php echo $_smarty_tpl->tpl_vars['helper_detail']->value['name'];?>
』的人</p>
        <?php
$_from = $_smarty_tpl->tpl_vars['baoming_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->index=-1;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$_smarty_tpl->tpl_vars['value']->index++;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
            <div class="detail-li-item">
                <p class="base-info">
                    <span class="text-left"><?php echo $_smarty_tpl->tpl_vars['value']->index;?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['sex'];?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['grade'];?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['wechat'];?>
</span>
                </p>
                <p class="detail-info">
                    <span class="word">想说的话</span><?php echo $_smarty_tpl->tpl_vars['value']->value['intro'];?>

                </p>
            </div>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
            <p class='no-result'>暂时还没有人~</p>
        <?php
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>

    </div>
</div><?php }
}
