<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:55:04
         compiled from "tpl/en\info.messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210795a7b3d7838b2a5-93073843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e99e630f23e961694ed452adffffcedfba89c4e' => 
    array (
      0 => 'tpl/en\\info.messages.tpl',
      1 => 1517842536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210795a7b3d7838b2a5-93073843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7b3d78433242_89248240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b3d78433242_89248240')) {function content_5a7b3d78433242_89248240($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['info_msg'] = new Smarty_variable(array('Completed'=>'Completed','Saved'=>'Saved','Canceled'=>'Canceled','Added'=>'Added','Deleted'=>'Deleted','LogIn'=>'Logged in','LogOut'=>'Logged out','*NoSelected'=>'Select element(s)','*CantComplete'=>'Can\'t complete operation','*AlreadyUsed'=>'Already used','*Error'=>'The operation failed','*ErrorCode'=>'Error code','*NoPage'=>'Page not found','*Denied'=>'Access denied'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg'];?><?php }} ?>