<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 00:23:57
         compiled from "tpl/ru/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21144631595a3e942ce76100-51020067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee7ca6911856ff569a45b1da30e742a0d129c707' => 
    array (
      0 => 'tpl/ru/admin/index.tpl',
      1 => 1514062914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21144631595a3e942ce76100-51020067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e942ce89f02_42349138',
  'variables' => 
  array (
    'modules' => 0,
    'mc' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e942ce89f02_42349138')) {function content_5a3e942ce89f02_42349138($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['mc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['mc']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php echo $_smarty_tpl->getSubTemplate ('admin/module.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('modules_cat'=>$_smarty_tpl->tpl_vars['mc']->value,'modules'=>$_smarty_tpl->tpl_vars['r']->value), 0);?>
<?php } ?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>