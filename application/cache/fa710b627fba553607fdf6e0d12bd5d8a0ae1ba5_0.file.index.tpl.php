<?php
/* Smarty version 3.1.29, created on 2016-05-17 16:46:08
  from "/usr/local/var/www/frame.hustonline.local/application/views/admin/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ada50ea4306_89775594',
  'file_dependency' => 
  array (
    'fa710b627fba553607fdf6e0d12bd5d8a0ae1ba5' => 
    array (
      0 => '/usr/local/var/www/frame.hustonline.local/application/views/admin/index.tpl',
      1 => 1463473980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573ada50ea4306_89775594 ($_smarty_tpl) {
?>
<div class="main">
    <p class="header">在线的行家</p>
    <div class="list-wrap">
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
            <div class="li-item">
                        <span class="avatar">
                            <img src="/resource/<?php echo $_smarty_tpl->tpl_vars['value']->value['avatar'];?>
" alt=""/>
                        </span>
                <span  class="name"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</span>
                <span  class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</span>
                <span  class="see_num"><?php if (!$_smarty_tpl->tpl_vars['value']->value['num']) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['value']->value['num'];
}?></span>
                <span  class="price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['skill_price'];?>
元/<?php echo $_smarty_tpl->tpl_vars['value']->value['skill_time'];?>
小时</span>
                <a href="/manage/index/detail/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="right">详情</a>
            </div>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
    </div>
</div><?php }
}
