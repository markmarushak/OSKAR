<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 03:03:54
         compiled from "tpl/ru/review/admin/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13769217065a5fe46a1ad969-15691538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27c20f1cefd7fc727356f442e209d4c10e862b69' => 
    array (
      0 => 'tpl/ru/review/admin/index.row.tpl',
      1 => 1514062947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13769217065a5fe46a1ad969-15691538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe46a1c9890_90184136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe46a1c9890_90184136')) {function content_5a5fe46a1c9890_90184136($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['ouID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</a></td><td><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oText'];?>
</small></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['oState']){?>Да<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oOrder'];?>
</td><?php }} ?>