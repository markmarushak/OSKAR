<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 14:42:07
         compiled from "tpl/ru/balance/admin/opers.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14015329715a50b60f5ccc56-78294740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55da7cdb134abc68ca19200db963008e12d792cb' => 
    array (
      0 => 'tpl/ru/balance/admin/opers.row.tpl',
      1 => 1514062942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14015329715a50b60f5ccc56-78294740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'op_names' => 0,
    'op_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a50b60f60cc99_83259666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50b60f60cc99_83259666')) {function content_5a50b60f60cc99_83259666($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
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