<?php /* Smarty version Smarty-3.1.16, created on 2016-04-23 07:18:20
         compiled from "views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1570363930571a921c009703-78868703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0580d4090148eed50d42a0b7012e5a9ff1ec7df5' => 
    array (
      0 => 'views/index.tpl',
      1 => 1461367089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1570363930571a921c009703-78868703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_571a921c00da14_26887694',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a921c00da14_26887694')) {function content_571a921c00da14_26887694($_smarty_tpl) {?><div class="main">
    <div class="hj-list">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <a href="index.php?method=detail&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
                        <span class="hj-num left"><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
人想见</span>
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
            <?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
        <?php } ?>
    </div>
    <div class="bottom-bar">
        <a href="/index.php" class="bottom-button">
            <img src="/resource/img/btn1_active.png" alt="取经">
        </a>
        <a href="/index.php?method=intro" class="bottom-button">
            <img src="/resource/img/btn2.png" alt="分享经验">
        </a>
    </div>
</div><?php }} ?>
