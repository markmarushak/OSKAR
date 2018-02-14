<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:54:59
         compiled from "tpl/en\line.top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21725a7b3d739cf9b9-99897249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968d0109e77de9e8c722f3a1c5c1100ae9391aea' => 
    array (
      0 => 'tpl/en\\line.top.tpl',
      1 => 1517842534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21725a7b3d739cf9b9-99897249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count_aopers' => 0,
    'user' => 0,
    'curr1' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7b3d73a9abe4_20860505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b3d73a9abe4_20860505')) {function content_5a7b3d73a9abe4_20860505($_smarty_tpl) {?><div class="_topLine"><div class="topLinks"><table class="formatTable" width="100%"><tr><td align="left"><?php echo $_smarty_tpl->getSubTemplate ('links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('elements'=>array(array('index','Main'),array('news','News'),array('cabinet','Cabinet','skip'=>!_uid()),array('admin','Control panel','count'=>$_smarty_tpl->tpl_vars['count_aopers']->value,'skip'=>($_smarty_tpl->tpl_vars['user']->value['uLevel']<90)))), 0);?>
</td><td align="right"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account','text'=>$_smarty_tpl->tpl_vars['user']->value['aName']), 0);?>
<?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'balance','text'=>'Balance'), 0);?>
<?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/login','params'=>'out','text'=>'Logout'), 0);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['RegMode']>=0){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/register','text'=>'Registration'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/login','text'=>'Login'), 0);?>
<?php }?></td><td align="right" width="100px"><?php echo $_smarty_tpl->getSubTemplate ('widget/clock/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr></table></div></div><?php }} ?>