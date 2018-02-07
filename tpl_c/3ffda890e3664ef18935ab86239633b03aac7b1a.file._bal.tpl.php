<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:36:12
         compiled from "tpl/en/balance/_bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16726272375a3e940cbc2df9-57560078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ffda890e3664ef18935ab86239633b03aac7b1a' => 
    array (
      0 => 'tpl/en/balance/_bal.tpl',
      1 => 1514049984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16726272375a3e940cbc2df9-57560078',
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
  'unifunc' => 'content_5a3e940cbd2069_41417956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e940cbd2069_41417956')) {function content_5a3e940cbd2069_41417956($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['curr1']->value){?>Your balance is <?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value['uBal']>0){?><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><b>No funds</b> on your balance<?php }?><?php }} ?>