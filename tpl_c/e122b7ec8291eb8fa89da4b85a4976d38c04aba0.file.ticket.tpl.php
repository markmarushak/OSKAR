<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 03:16:15
         compiled from "tpl/ru/tickets/admin/ticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186509995a5fe74f6a07f9-99084760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e122b7ec8291eb8fa89da4b85a4976d38c04aba0' => 
    array (
      0 => 'tpl/ru/tickets/admin/ticket.tpl',
      1 => 1514062949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186509995a5fe74f6a07f9-99084760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    '_tstates' => 0,
    'list' => 0,
    'l' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe74f725bf9_54318344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe74f725bf9_54318344')) {function content_5a5fe74f725bf9_54318344($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Тикет'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('tickets/_states.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value['tID']){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'ticket','title'=>'Тикет','fields'=>array('tID'=>array(),'tState'=>array('X','Статус',0,$_smarty_tpl->tpl_vars['_tstates']->value[$_smarty_tpl->tpl_vars['el']->value['tState']]),'uLogin'=>array('T','Отправитель','skip'=>!$_smarty_tpl->tpl_vars['el']->value['uLogin'],'readonly'=>true),'tMail'=>array('T','e-mail отправителя','skip'=>!$_smarty_tpl->tpl_vars['el']->value['mMail'],'readonly'=>true),'tTopic'=>array('L','Тема','size'=>50,'readonly'=>true),'tText'=>array('W','Текст','size'=>10,'readonly'=>true)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>valueIf($_smarty_tpl->tpl_vars['el']->value['tState']<8,array('close'=>'Закрыть тикет'))), 0);?>
<table class="FromatTable"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?><tr><td width="250px"><td width="250px"><td width="250px"></tr><tr><?php if ($_smarty_tpl->tpl_vars['l']->value['muID']==$_smarty_tpl->tpl_vars['el']->value['tuID']){?><td colspan="2"><?php }else{ ?><td><td colspan="2"><?php }?><fieldset><?php echo $_smarty_tpl->tpl_vars['l']->value['mTS'];?>
 [<?php echo $_smarty_tpl->tpl_vars['l']->value['aName'];?>
]<br><br><?php echo $_smarty_tpl->tpl_vars['l']->value['mText'];?>
</fieldset></td></tr><?php } ?></table><br><?php if ($_smarty_tpl->tpl_vars['el']->value['tState']<8){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('tID'=>$_smarty_tpl->tpl_vars['el']->value['tID'],'mText'=>array('W','Ответ!!',array('text_empty'=>'укажите текст'),'size'=>10)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('answer'=>'Ответить')), 0);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новый тикет','fields'=>array('uLogin'=>array('T','Отправитель',array('user_not_found'=>'пользователь не найден'),'default'=>valueIf(!$_smarty_tpl->tpl_vars['el']->value['mMail'],exValue($_smarty_tpl->tpl_vars['user']->value['uLogin'],$_GET['from']))),'tMail'=>array('T','e-mail отправителя',array('mail_wrong'=>'неверный e-mail'),'skip'=>true),'tTopic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50),'tText'=>array('W','Текст!!',array('text_empty'=>'укажите текст'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('create'=>'Создать')), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>