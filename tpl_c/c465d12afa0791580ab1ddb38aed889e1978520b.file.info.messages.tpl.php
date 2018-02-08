<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 00:34:34
         compiled from "tpl/ru\info.messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:983059f783602c07d3-40741446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c465d12afa0791580ab1ddb38aed889e1978520b' => 
    array (
      0 => 'tpl/ru\\info.messages.tpl',
      1 => 1517842576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '983059f783602c07d3-40741446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f783604077c5_37519403',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f783604077c5_37519403')) {function content_59f783604077c5_37519403($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['info_msg'] = new Smarty_variable(array('Completed'=>'Выполнено','Saved'=>'Сохранено','Canceled'=>'Отменено','Added'=>'Добавлено','Deleted'=>'Удалено','LogIn'=>'Вход выполнен','LogOut'=>'Выход выполнен','*NoSelected'=>'Отметьте хотябы один элемент','*CantComplete'=>'Операция не может быть выполнена','*AlreadyUsed'=>'Данные уже используются','*Error'=>'Ошибка при выполнении операции','*ErrorCode'=>'Код ошибки','*NoPage'=>'Страница не найдена','*Denied'=>'В доступе отказано'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg'];?><?php }} ?>