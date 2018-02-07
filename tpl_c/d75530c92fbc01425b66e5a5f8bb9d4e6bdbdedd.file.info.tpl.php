<?php /* Smarty version Smarty-3.1.8, created on 2018-02-03 23:54:16
         compiled from "tpl/en/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7051818705a3e90922e0262-56070203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd75530c92fbc01425b66e5a5f8bb9d4e6bdbdedd' => 
    array (
      0 => 'tpl/en/info.tpl',
      1 => 1517700206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7051818705a3e90922e0262-56070203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e9092302623_69225448',
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e9092302623_69225448')) {function content_5a3e9092302623_69225448($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="info_box" class="flash_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b><?php if ((substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*')&&!is_array($_smarty_tpl->tpl_vars['_info']->value[1])){?><br><?php echo $_smarty_tpl->tpl_vars['info_msg']->value['*ErrorCode'];?>
 <?php echo $_smarty_tpl->tpl_vars['_info']->value[1];?>
<?php }?></div><?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)!='*'){?><script type="text/javascript">setTimeout(function(){$('#info_box').fadeOut('slow')},5000);</script><?php }?><?php }?><?php }?><?php }} ?>