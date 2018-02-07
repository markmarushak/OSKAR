<?php /* Smarty version Smarty-3.1.8, created on 2017-11-03 00:19:54
         compiled from "tpl/ru\depo\admin\plans.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:456259fb7dea5f04d4-89149827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7db75aec0ba830a77a888260611005e48c0ec36' => 
    array (
      0 => 'tpl/ru\\depo\\admin\\plans.row.tpl',
      1 => 1380041898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '456259fb7dea5f04d4-89149827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59fb7dea70aa52_94285290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fb7dea70aa52_94285290')) {function content_59fb7dea70aa52_94285290($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pHidden']){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pNoCalc']){?>*<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pGroup'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMax'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pDays'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pPerc'];?>
</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['l']->value['cnt'];?>
 (<?php echo _z($_smarty_tpl->tpl_vars['l']->value['dsum'],1);?>
)</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['l']->value['acnt'];?>
 (<?php echo _z($_smarty_tpl->tpl_vars['l']->value['adsum'],1);?>
)</td><?php }} ?>