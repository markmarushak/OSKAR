<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:36:27
         compiled from "tpl/en/tickets/_states.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10026374695a3e941bd78ac7-54514669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3916e90f5577ec977f2cb1c0b7a6350b3693a99' => 
    array (
      0 => 'tpl/en/tickets/_states.tpl',
      1 => 1514049992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10026374695a3e941bd78ac7-54514669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e941bd80b12_14939737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e941bd80b12_14939737')) {function content_5a3e941bd80b12_14939737($_smarty_tpl) {?>﻿<?php $_smarty_tpl->tpl_vars['_tstates'] = new Smarty_variable(array(1=>'new',2=>'Awaiting Reply',3=>'In progress',4=>'Processed',5=>'Reply sent',8=>'Detained',9=>'Closed'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates'];?><?php }} ?>