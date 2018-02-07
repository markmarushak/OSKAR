<?php /* Smarty version Smarty-3.1.8, created on 2018-02-03 23:54:16
         compiled from "tpl/en/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:728582535a3e940cb95328-47747885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e06d36567e9b241ff94b56e6bba0fbef4f59f5c4' => 
    array (
      0 => 'tpl/en/menu.tpl',
      1 => 1517700208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '728582535a3e940cb95328-47747885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e940cbbb922_56208726',
  'variables' => 
  array (
    'class' => 0,
    'elements' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e940cbbb922_56208726')) {function content_5a3e940cbbb922_56208726($_smarty_tpl) {?><ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['e']->value['skip']){?><?php echo $_smarty_tpl->getSubTemplate ('menu.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>$_smarty_tpl->tpl_vars['e']->value[0],'text'=>$_smarty_tpl->tpl_vars['e']->value[1],'text2'=>$_smarty_tpl->tpl_vars['e']->value[2],'text3'=>$_smarty_tpl->tpl_vars['e']->value[3],'count'=>$_smarty_tpl->tpl_vars['e']->value['count'],'submenu'=>$_smarty_tpl->tpl_vars['e']->value['submenu'],'params'=>$_smarty_tpl->tpl_vars['e']->value['params']), 0);?>
<?php }?><?php } ?></ul><?php }} ?>