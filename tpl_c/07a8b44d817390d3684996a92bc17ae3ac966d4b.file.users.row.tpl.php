<?php /* Smarty version Smarty-3.1.8, created on 2017-10-31 00:08:29
         compiled from "tpl/ru\account\admin\users.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1406059f786bd60e643-58361603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a8b44d817390d3684996a92bc17ae3ac966d4b' => 
    array (
      0 => 'tpl/ru\\account\\admin\\users.row.tpl',
      1 => 1345415352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406059f786bd60e643-58361603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'usr_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f786bd753ce9_42152368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f786bd753ce9_42152368')) {function content_59f786bd753ce9_42152368($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uGroup'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</a></td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user2'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['aName'];?>
</a></td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['uMail'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['usr_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['uState']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uLevel'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uRef'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['RefLogin'];?>
</a></td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['uBal'],1,-1);?>
</td><?php }} ?>