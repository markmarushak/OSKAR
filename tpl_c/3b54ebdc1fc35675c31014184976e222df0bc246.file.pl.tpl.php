<?php /* Smarty version Smarty-3.1.8, created on 2018-01-09 05:23:30
         compiled from "tpl/en/pl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11463165945a5427a268a5f6-36437874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b54ebdc1fc35675c31014184976e222df0bc246' => 
    array (
      0 => 'tpl/en/pl.tpl',
      1 => 1514062901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11463165945a5427a268a5f6-36437874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pl_params' => 0,
    '_selfLink' => 0,
    'pn' => 0,
    'linkparams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5427a26b4340_33951231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5427a26b4340_33951231')) {function content_5a5427a26b4340_33951231($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['pl_params']->value['Pages'])>0){?><div class="paginator"><small>Page <?php echo $_smarty_tpl->tpl_vars['pl_params']->value['Page'];?>
 of <?php echo $_smarty_tpl->tpl_vars['pl_params']->value['PagesCount'];?>
</small><?php if (count($_smarty_tpl->tpl_vars['pl_params']->value['Pages'])>0){?>&nbsp;&nbsp;&nbsp;<?php }?><?php  $_smarty_tpl->tpl_vars['pn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pn']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pl_params']->value['Pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pn']->key => $_smarty_tpl->tpl_vars['pn']->value){
$_smarty_tpl->tpl_vars['pn']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pn']->key;
?><a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pn']->value[1];?>
<?php echo $_smarty_tpl->tpl_vars['linkparams']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['pn']->value[1]==$_smarty_tpl->tpl_vars['pl_params']->value['Page']){?>pgactive<?php }else{ ?>pgbutton<?php }?>"><?php if ($_smarty_tpl->tpl_vars['pn']->value[0]=='&lt;&lt;'){?>First<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&lt;'){?>Back<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&gt;'){?>Forward<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&gt;&gt;'){?>Last<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pn']->value[0];?>
<?php }?></a><?php } ?></div><?php }?><?php }} ?>