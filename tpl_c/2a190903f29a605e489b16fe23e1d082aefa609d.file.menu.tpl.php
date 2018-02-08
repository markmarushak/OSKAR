<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:55:22
         compiled from "tpl/ru\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:447959f7491262f371-57735842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a190903f29a605e489b16fe23e1d082aefa609d' => 
    array (
      0 => 'tpl/ru\\menu.tpl',
      1 => 1517842574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '447959f7491262f371-57735842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f749126feb50_40609516',
  'variables' => 
  array (
    'elements' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f749126feb50_40609516')) {function content_59f749126feb50_40609516($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['e']->value['skip']){?><?php echo $_smarty_tpl->getSubTemplate ('menu.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>$_smarty_tpl->tpl_vars['e']->value[0],'text'=>$_smarty_tpl->tpl_vars['e']->value[1],'text2'=>$_smarty_tpl->tpl_vars['e']->value[2],'text3'=>$_smarty_tpl->tpl_vars['e']->value[3],'count'=>$_smarty_tpl->tpl_vars['e']->value['count'],'submenu'=>$_smarty_tpl->tpl_vars['e']->value['submenu'],'params'=>$_smarty_tpl->tpl_vars['e']->value['params']), 0);?>
<?php }?><?php } ?><?php }} ?>