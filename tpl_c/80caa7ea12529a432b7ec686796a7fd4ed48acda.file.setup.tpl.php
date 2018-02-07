<?php /* Smarty version Smarty-3.1.8, created on 2018-01-08 16:08:21
         compiled from "tpl/ru/faq/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18148509765a536d4505c4a9-74897898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80caa7ea12529a432b7ec686796a7fd4ed48acda' => 
    array (
      0 => 'tpl/ru/faq/admin/setup.tpl',
      1 => 1514062946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18148509765a536d4505c4a9-74897898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a536d45081339_41984578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a536d45081339_41984578')) {function content_5a536d45081339_41984578($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('ShowCount'=>array('I','Кол-во записей на странице'),'InBlock'=>array('I','Кол-во случайных записей в блоке'),'_Cats'=>array('A','Категории<br><<одна строка - одна категория>>','size'=>20))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>