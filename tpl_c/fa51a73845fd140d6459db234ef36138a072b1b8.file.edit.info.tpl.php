<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:55:00
         compiled from "tpl/en\edit.info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245095a7b3d74124f46-95490219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa51a73845fd140d6459db234ef36138a072b1b8' => 
    array (
      0 => 'tpl/en\\edit.info.tpl',
      1 => 1517842540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245095a7b3d74124f46-95490219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7b3d741869d2_25692903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b3d741869d2_25692903')) {function content_5a7b3d741869d2_25692903($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="edit_<?php echo $_smarty_tpl->tpl_vars['_info']->value[0];?>
_info_box" class="flash_edit_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b></div><?php }?><?php }?><?php }} ?>