<?php /* Smarty version Smarty-3.1.8, created on 2017-10-30 19:58:13
         compiled from "tpl/ru\balance\_bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:474759f74c150617c9-97314572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3dd96476bbceac7d6c91681ceef70a79b9651c' => 
    array (
      0 => 'tpl/ru\\balance\\_bal.tpl',
      1 => 1354474858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474759f74c150617c9-97314572',
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
  'unifunc' => 'content_59f74c150cb7a7_05560754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f74c150cb7a7_05560754')) {function content_59f74c150cb7a7_05560754($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['curr1']->value){?>На Вашем счете <?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value['uBal']>0){?><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?>На Вашем счете <b>нет средств</b><?php }?><?php }} ?>