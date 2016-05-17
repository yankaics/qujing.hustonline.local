<?php /* Smarty version Smarty-3.1.16, created on 2016-04-23 06:38:43
         compiled from "views/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1438979412571aa3e70bb445-08197466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94f5f4db6c8fe7801f1ac6baf0df03e608ca223b' => 
    array (
      0 => 'views/detail.tpl',
      1 => 1461364247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1438979412571aa3e70bb445-08197466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_571aa3e70f1dd3_50100348',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571aa3e70f1dd3_50100348')) {function content_571aa3e70f1dd3_50100348($_smarty_tpl) {?><div class="main">
   <div class="hj-item">
        <div class="hj-avatar-wrap">
            <img class="hj-avatar" src="/resource/<?php echo $_smarty_tpl->tpl_vars['data']->value['avatar'];?>
" alt="头像"/>

        </div>
        <p class="head">
            <span class="hj-name"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</span> <span class="hj-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</span>
        </p>
        <p class="hj-skill">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['skill_intro'];?>

        </p>
        <p class="hj-info clf">
            <span class="hj-num left"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
人想见</span>
                                <span class="hj-price-wrap right">
                                    <span class="hj-price">￥<?php echo $_smarty_tpl->tpl_vars['data']->value['skill_price'];?>
</span>
                                    <span class="hj-time">/<?php echo $_smarty_tpl->tpl_vars['data']->value['skill_time'];?>
小时</span>
                                </span>
        </p>
        <p class="hj-detail-wrap clf"> </p>
    </div>

    <div class="intro-content">
        <p class="detail-header">个人简介</p>
        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['person_intro'];?>
</p>
        <p class="detail-header">主题简介</p>
        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['subject_intro'];?>
</p>
        <p class="warn-word">关注公众号【华科学习帝】，查看更多主题。</p>
    </div>
    <a href="/index.php?method=reserve&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><div class="bottom-bar">报名约见</div></a>
</div><?php }} ?>
