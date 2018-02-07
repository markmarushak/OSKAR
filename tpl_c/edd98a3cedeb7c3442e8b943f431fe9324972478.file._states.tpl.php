<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 23:24:08
         compiled from "tpl/ru/tickets/_states.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19179711125a400ce899cf28-53554039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edd98a3cedeb7c3442e8b943f431fe9324972478' => 
    array (
      0 => 'tpl/ru/tickets/_states.tpl',
      1 => 1514062923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19179711125a400ce899cf28-53554039',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a400ce89a7817_66501850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a400ce89a7817_66501850')) {function content_5a400ce89a7817_66501850($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_tstates'] = new Smarty_variable(array(1=>'Новый',2=>'Ожидает ответа',3=>'В процессе',4=>'Обработан',5=>'Ответ отправлен',8=>'Задержан',9=>'Закрыт'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates'];?><?php }} ?>