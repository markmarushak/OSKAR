<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 23:47:56
         compiled from "tpl/ru\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2253159f78344249276-58089697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '781e36aac6b517cfcbb0acf8e0f9d4337305f104' => 
    array (
      0 => 'tpl/ru\\admin\\index.tpl',
      1 => 1517842582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2253159f78344249276-58089697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f783442e2384_75209356',
  'variables' => 
  array (
    'modules' => 0,
    'mc' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f783442e2384_75209356')) {function content_59f783442e2384_75209356($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['mc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['mc']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php echo $_smarty_tpl->getSubTemplate ('admin/module.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('modules_cat'=>$_smarty_tpl->tpl_vars['mc']->value,'modules'=>$_smarty_tpl->tpl_vars['r']->value), 0);?>
<?php } ?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>