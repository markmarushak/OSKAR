<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 03:16:36
         compiled from "tpl/ru/tickets/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3406090035a5fe764816434-42003383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984fc816e4e3d19e7070fc9bd7cdd151a06dce51' => 
    array (
      0 => 'tpl/ru/tickets/admin/setup.tpl',
      1 => 1514062949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3406090035a5fe764816434-42003383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe76482e655_09968747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe76482e655_09968747')) {function content_5a5fe76482e655_09968747($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('NoMail'=>array('C','Не высылать оповещения на e-mail'),'Captcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'_Cats'=>array('A','Категории сообщений<br><<одна строка - одна категория>>','size'=>20))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>