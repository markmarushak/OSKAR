<?php /* Smarty version Smarty-3.1.8, created on 2018-01-12 17:18:30
         compiled from "tpl/ru/review/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2793267525a58c3b68f8ce8-66143791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994ba8e4808751ad853e78f35cf71c6642d64e46' => 
    array (
      0 => 'tpl/ru/review/admin/setup.tpl',
      1 => 1514062948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2793267525a58c3b68f8ce8-66143791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a58c3b6977640_46286140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a58c3b6977640_46286140')) {function content_5a58c3b6977640_46286140($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Mode'=>array('C','Модерировать отзывы'),'ShowCount'=>array('I','Кол-во отзывов на странице'),'InBlock'=>array('I','Кол-во отзывов в блоке'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>