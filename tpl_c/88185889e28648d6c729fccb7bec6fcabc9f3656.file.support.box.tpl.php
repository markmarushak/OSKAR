<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 03:27:31
         compiled from "tpl/ru/message/support.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3576267845a5fe9f3f23c15-54294352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88185889e28648d6c729fccb7bec6fcabc9f3656' => 
    array (
      0 => 'tpl/ru/message/support.box.tpl',
      1 => 1514062920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3576267845a5fe9f3f23c15-54294352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'cats' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe9f4004f87_32126623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe9f4004f87_32126623')) {function content_5a5fe9f4004f87_32126623($_smarty_tpl) {?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'fields'=>array('Mail'=>array('T','Ваш e-mail!! <<для связи>>',array('user_not_found'=>'укажите e-mail','mail_wrong'=>'неверный e-mail'),'skip'=>_uid(),'default'=>$_smarty_tpl->tpl_vars['user']->value['uMail']),'Category'=>array('S','Категория',0,$_smarty_tpl->tpl_vars['cats']->value,'skip'=>!$_smarty_tpl->tpl_vars['cats']->value),'Topic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50),'Message'=>array('W','Текст!!',array('text_empty'=>'укажите текст'),'size'=>12,'cols'=>60)),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Captcha'],'btn_text'=>'Отправить'), 0);?>
<?php }} ?>