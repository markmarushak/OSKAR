<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:51:09
         compiled from "tpl/ru\edit.info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1879559f748cebce787-57484681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e3e89178b865cc6d4f5901ec2d2a58877045b7a' => 
    array (
      0 => 'tpl/ru\\edit.info.tpl',
      1 => 1517842577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879559f748cebce787-57484681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f748cec7e768_70001371',
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f748cec7e768_70001371')) {function content_59f748cec7e768_70001371($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="edit_<?php echo $_smarty_tpl->tpl_vars['_info']->value[0];?>
_info_box" class="flash_edit_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b></div><?php }?><?php }?><?php }} ?>