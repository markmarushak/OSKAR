<?php /* Smarty version Smarty-3.1.8, created on 2017-10-31 02:43:50
         compiled from "tpl/ru\depo\_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184059f7ab265a99c1-23573944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff88ad6e7ef9069837877b1a3b6bcfdc911d3099' => 
    array (
      0 => 'tpl/ru\\depo\\_statuses.tpl',
      1 => 1343328828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184059f7ab265a99c1-23573944',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f7ab265d7fd2_65226655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f7ab265d7fd2_65226655')) {function content_59f7ab265d7fd2_65226655($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['ststrs'] = new Smarty_variable(array(0=>'Отменен',1=>'Активен',2=>'Окончен',3=>'Закрыт'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs'];?>
<?php }} ?>