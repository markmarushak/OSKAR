<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:55:00
         compiled from "tpl/en\err.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93445a7b3d74aba382-02016298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19b8a072e254c48f46312fa042edbe3f075625cd' => 
    array (
      0 => 'tpl/en\\err.tpl',
      1 => 1517842539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93445a7b3d74aba382-02016298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errs' => 0,
    'form' => 0,
    'tpl_errors' => 0,
    'i' => 0,
    'error_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7b3d74b6deb4_37531950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b3d74b6deb4_37531950')) {function content_5a7b3d74b6deb4_37531950($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['error_text'] = new Smarty_variable('', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text'];?><?php $_smarty_tpl->tpl_vars['error_class'] = new Smarty_variable('', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class'];?><?php if ($_smarty_tpl->tpl_vars['errs']->value&&(count($_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value])>0)){?><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['e']->key;
?><?php if (in_array($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value])){?><?php $_smarty_tpl->tpl_vars['error_text'] = new Smarty_variable(($_smarty_tpl->tpl_vars['error_text']->value).($_smarty_tpl->tpl_vars['e']->value)."<br>", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text'];?><?php $_smarty_tpl->tpl_vars['error_class'] = new Smarty_variable('error', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class'];?><?php $_smarty_tpl->createLocalArrayVariable('tpl_errors', null, 3);
$_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value][array_search($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value])] = null;
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['tpl_errors'] = clone $_smarty_tpl->tpl_vars['tpl_errors']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['tpl_errors'] = clone $_smarty_tpl->tpl_vars['tpl_errors'];?><?php }?><?php } ?><?php $_smarty_tpl->tpl_vars['error_text'] = new Smarty_variable("<span class=\"err\">".($_smarty_tpl->tpl_vars['error_text']->value)."</span>", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text'];?><?php }?><?php }} ?>