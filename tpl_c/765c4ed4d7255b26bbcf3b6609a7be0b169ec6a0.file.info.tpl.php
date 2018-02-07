<?php /* Smarty version Smarty-3.1.8, created on 2017-10-30 23:53:40
         compiled from "tpl/ru\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:513059f7834499d2f9-74984712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765c4ed4d7255b26bbcf3b6609a7be0b169ec6a0' => 
    array (
      0 => 'tpl/ru\\info.tpl',
      1 => 1337551748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '513059f7834499d2f9-74984712',
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
  'unifunc' => 'content_59f78344ae1e70_70397693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f78344ae1e70_70397693')) {function content_59f78344ae1e70_70397693($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="info_box" class="flash_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b><?php if ((substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*')&&!is_array($_smarty_tpl->tpl_vars['_info']->value[1])){?><br><?php echo $_smarty_tpl->tpl_vars['info_msg']->value['*ErrorCode'];?>
 <?php echo $_smarty_tpl->tpl_vars['_info']->value[1];?>
<?php }?></div><?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)!='*'){?><script type="text/javascript">setTimeout(function(){$('#info_box').fadeOut('slow')},5000);</script><?php }?><?php }?><?php }?><?php }} ?>