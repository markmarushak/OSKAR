<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 00:24:21
         compiled from "tpl/ru/info.messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12861879155a3e942d0166c6-52158990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9816f7cba4f53de6f70673032b8a1a2a2f67ef' => 
    array (
      0 => 'tpl/ru/info.messages.tpl',
      1 => 1514062903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12861879155a3e942d0166c6-52158990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e942d024d68_09208634',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e942d024d68_09208634')) {function content_5a3e942d024d68_09208634($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['info_msg'] = new Smarty_variable(array('Completed'=>'Выполнено','Saved'=>'Сохранено','Canceled'=>'Отменено','Added'=>'Добавлено','Deleted'=>'Удалено','LogIn'=>'Вход выполнен','LogOut'=>'Выход выполнен','*NoSelected'=>'Отметьте хотябы один элемент','*CantComplete'=>'Операция не может быть выполнена','*AlreadyUsed'=>'Данные уже используются','*Error'=>'Ошибка при выполнении операции','*ErrorCode'=>'Код ошибки','*NoPage'=>'Страница не найдена','*Denied'=>'В доступе отказано'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg'];?><?php }} ?>