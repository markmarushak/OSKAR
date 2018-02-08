<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 00:02:56
         compiled from "tpl/ru\pl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2921959f74c3588a906-02291760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1f1f49f1432d8d376d64f2dc512207e146f438' => 
    array (
      0 => 'tpl/ru\\pl.tpl',
      1 => 1517842573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2921959f74c3588a906-02291760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f74c35adcde7_25680262',
  'variables' => 
  array (
    'pl_params' => 0,
    '_selfLink' => 0,
    'pn' => 0,
    'linkparams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f74c35adcde7_25680262')) {function content_59f74c35adcde7_25680262($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['pl_params']->value['Pages'])>0){?><div class="text-center"><ul class="pagination"><?php if (count($_smarty_tpl->tpl_vars['pl_params']->value['Pages'])>0){?>&nbsp;&nbsp;&nbsp;<?php }?><?php  $_smarty_tpl->tpl_vars['pn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pn']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pl_params']->value['Pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pn']->key => $_smarty_tpl->tpl_vars['pn']->value){
$_smarty_tpl->tpl_vars['pn']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pn']->key;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pn']->value[1];?>
<?php echo $_smarty_tpl->tpl_vars['linkparams']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['pn']->value[1]==$_smarty_tpl->tpl_vars['pl_params']->value['Page']){?>pgactive<?php }else{ ?>pgbutton<?php }?>"><?php if ($_smarty_tpl->tpl_vars['pn']->value[0]=='&lt;&lt;'){?>Первая<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&lt;'){?>Назад<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&gt;'){?>Вперед<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&gt;&gt;'){?>Последняя<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pn']->value[0];?>
<?php }?></a></li><?php } ?></ul></div><?php }?><?php }} ?>