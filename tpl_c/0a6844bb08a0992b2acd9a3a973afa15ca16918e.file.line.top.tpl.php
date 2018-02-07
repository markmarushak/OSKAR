<?php /* Smarty version Smarty-3.1.8, created on 2018-02-03 23:54:16
         compiled from "tpl/en/line.top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20619174355a3e9092230091-34857255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6844bb08a0992b2acd9a3a973afa15ca16918e' => 
    array (
      0 => 'tpl/en/line.top.tpl',
      1 => 1517700207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20619174355a3e9092230091-34857255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e909225c0b5_65007451',
  'variables' => 
  array (
    'count_aopers' => 0,
    'user' => 0,
    'curr1' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e909225c0b5_65007451')) {function content_5a3e909225c0b5_65007451($_smarty_tpl) {?><div class="_topLine"><div class="topLinks"><table class="formatTable" width="100%"><tr><td align="left"><?php echo $_smarty_tpl->getSubTemplate ('links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('elements'=>array(array('index','Main'),array('news','News'),array('cabinet','Cabinet','skip'=>!_uid()),array('admin','Control panel','count'=>$_smarty_tpl->tpl_vars['count_aopers']->value,'skip'=>($_smarty_tpl->tpl_vars['user']->value['uLevel']<90)))), 0);?>
</td><td align="right"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account','text'=>$_smarty_tpl->tpl_vars['user']->value['aName']), 0);?>
<?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'balance','text'=>'Balance'), 0);?>
<?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/login','params'=>'out','text'=>'Logout'), 0);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['RegMode']>=0){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/register','text'=>'Registration'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/login','text'=>'Login'), 0);?>
<?php }?></td><td align="right" width="100px"><?php echo $_smarty_tpl->getSubTemplate ('widget/clock/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr></table></div></div><?php }} ?>