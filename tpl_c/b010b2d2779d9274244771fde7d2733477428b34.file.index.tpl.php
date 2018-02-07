<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 15:11:51
         compiled from "tpl/ru/review/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7200688455a3f99879f5c90-92102357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b010b2d2779d9274244771fde7d2733477428b34' => 
    array (
      0 => 'tpl/ru/review/index.tpl',
      1 => 1514062922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7200688455a3f99879f5c90-92102357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3f9987aa3a87_51679373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3f9987aa3a87_51679373')) {function content_5a3f9987aa3a87_51679373($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Чат'), 0);?>
<div class="table-section chat overflow-hidden"><div class="header-section"><div class="header-chat"><h1>Онлайн Чат</h1><div class="out-chat"><a href="cabinet"><i class="fa fa-home" aria-hidden="true"></i></a></div></div></div><div class="vertical-middle"><?php if (isset($_GET['awating'])){?><h2>Ваш отзыв успешно добавлен!</h2><p class="info">Администратор проверит его в ближайшее время</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><div class="chat-box"><table class="formatTable chat"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><tr><td class="chat-block"><ul><li class="name-chat"><span><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</span><p><?php echo nl2br($_smarty_tpl->tpl_vars['l']->value['oText']);?>
</p></li><li class="text-chat"></li></ul></td></tr><?php } ?></table></div><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php }else{ ?>- Нет записей -<?php }?></div><div class="footer-section overflow-hidden"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Участвуйте в чате','fields'=>array('Text'=>array('W',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Review_Mode'],'Текст <<проверяется>>',''),array('text_empty'=>'укажите текст'),'size'=>5)),'btn_text'=>'Добавить'), 0);?>
<?php }?></div><?php }?></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>