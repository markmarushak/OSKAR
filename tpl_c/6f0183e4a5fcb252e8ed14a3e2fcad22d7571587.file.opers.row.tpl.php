<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 12:09:22
         compiled from "tpl/ru\balance\admin\opers.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166859f7835311aa12-25882076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f0183e4a5fcb252e8ed14a3e2fcad22d7571587' => 
    array (
      0 => 'tpl/ru\\balance\\admin\\opers.row.tpl',
      1 => 1517842590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166859f7835311aa12-25882076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f783532c1e21_59104424',
  'variables' => 
  array (
    'l' => 0,
    'op_names' => 0,
    'op_statuses' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f783532c1e21_59104424')) {function content_59f783532c1e21_59104424($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['ouID'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</a><br><sup><?php echo $_smarty_tpl->tpl_vars['l']->value['oParams']['user'];?>
</sup></td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oCTS'];?>
</small><br><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/oper'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
"><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['l']->value['oOper']];?>
</a></td><td><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['ocID'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</a><br><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oParams2']['acc'];?>
</small></td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oSum'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
<?php if ($_smarty_tpl->tpl_vars['l']->value['oComis']!=0){?><br><sup><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oComis'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</sup><?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oBatch'];?>
</td><td class="nowrap"><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/oper'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
"><?php echo $_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['oState']];?>
</a></td><td><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oMemo'];?>
</small></td><?php }} ?>