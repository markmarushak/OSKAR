<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 15:12:20
         compiled from "tpl/ru/balance/_bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20534386115a3f99a4b2ad70-88343173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c591f3b9b09660e4862edee775953775b05cd31' => 
    array (
      0 => 'tpl/ru/balance/_bal.tpl',
      1 => 1514062915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20534386115a3f99a4b2ad70-88343173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'curr1' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3f99a4b389d7_01077044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3f99a4b389d7_01077044')) {function content_5a3f99a4b389d7_01077044($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['curr1']->value){?>На Вашем счете <?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value['uBal']>0){?><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?>На Вашем счете <b>нет средств</b><?php }?><?php }} ?>