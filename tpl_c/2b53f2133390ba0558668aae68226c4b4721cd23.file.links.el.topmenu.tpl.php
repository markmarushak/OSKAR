<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:55:16
         compiled from "tpl/ru\links.el.topmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2428459f748ce883809-63247567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b53f2133390ba0558668aae68226c4b4721cd23' => 
    array (
      0 => 'tpl/ru\\links.el.topmenu.tpl',
      1 => 1517842575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2428459f748ce883809-63247567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f748ce96f340_58618167',
  'variables' => 
  array (
    'module' => 0,
    'params' => 0,
    'tpl_module' => 0,
    'tpl_vmodule' => 0,
    'current' => 0,
    'text' => 0,
    'text2' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f748ce96f340_58618167')) {function content_59f748ce96f340_58618167($_smarty_tpl) {?><li><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value){?>?<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
<?php }?>"<?php if (($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_module']->value)||($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_vmodule']->value)||$_smarty_tpl->tpl_vars['current']->value){?> class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['text2']->value){?><span><?php echo $_smarty_tpl->tpl_vars['text2']->value;?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['count']->value>0){?><b><sup><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</sup></b><?php }?></a></li><?php }} ?>