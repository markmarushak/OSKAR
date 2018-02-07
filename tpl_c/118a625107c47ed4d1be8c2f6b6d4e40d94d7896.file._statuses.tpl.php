<?php /* Smarty version Smarty-3.1.8, created on 2017-10-31 00:08:29
         compiled from "tpl/ru\account\admin\_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83059f786bd588b50-35231893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118a625107c47ed4d1be8c2f6b6d4e40d94d7896' => 
    array (
      0 => 'tpl/ru\\account\\admin\\_statuses.tpl',
      1 => 1331289300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83059f786bd588b50-35231893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f786bd5bafd8_11852754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f786bd5bafd8_11852754')) {function content_59f786bd5bafd8_11852754($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['usr_statuses'] = new Smarty_variable(array(0=>'не активен',1=>'активен',2=>'наказан',3=>'заблокирован',4=>'резерв'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['usr_statuses'] = clone $_smarty_tpl->tpl_vars['usr_statuses']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['usr_statuses'] = clone $_smarty_tpl->tpl_vars['usr_statuses'];?>
<?php }} ?>