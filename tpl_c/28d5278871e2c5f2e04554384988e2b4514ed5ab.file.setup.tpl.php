<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 03:15:55
         compiled from "tpl/ru/message/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14671356695a5fe73b7e6862-17890750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28d5278871e2c5f2e04554384988e2b4514ed5ab' => 
    array (
      0 => 'tpl/ru/message/admin/setup.tpl',
      1 => 1514062946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14671356695a5fe73b7e6862-17890750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe73b863da1_13457236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe73b863da1_13457236')) {function content_5a5fe73b863da1_13457236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Mode'=>array('S','Режим','',array(0=>'только поддержка',1=>'поддержка и входящие',2=>'все')),'NoMail'=>array('C','Не высылать оповещения на e-mail'),'ShowCount'=>array('I','Кол-во сообщений на странице'),1=>'Поддержка','Captcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'_Cats'=>array('A','Категории сообщений<br><<одна строка - одна категория>>','size'=>20))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>