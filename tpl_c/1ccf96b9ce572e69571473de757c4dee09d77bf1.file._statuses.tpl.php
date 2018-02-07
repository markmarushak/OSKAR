<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:36:25
         compiled from "tpl/en/depo/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8248901755a3e941930ff20-37693683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ccf96b9ce572e69571473de757c4dee09d77bf1' => 
    array (
      0 => 'tpl/en/depo/_statuses.tpl',
      1 => 1514049988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8248901755a3e941930ff20-37693683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e941931cac7_81374560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e941931cac7_81374560')) {function content_5a3e941931cac7_81374560($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['ststrs'] = new Smarty_variable(array(0=>'Canceled',1=>'Active',2=>'Completed',3=>'Close'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs'];?>
<?php }} ?>