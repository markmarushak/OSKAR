<?php /* Smarty version Smarty-3.1.8, created on 2018-01-08 16:57:19
         compiled from "tpl/ru/depo/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6246234535a5378bff3e612-05114726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d82fef8b6b97093de3f445204f7db5a0a7cc1c' => 
    array (
      0 => 'tpl/ru/depo/index.row.tpl',
      1 => 1514062918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6246234535a5378bff3e612-05114726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'ststrs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5378c00a4ea6_56126882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5378c00a4ea6_56126882')) {function content_5a5378c00a4ea6_56126882($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dCTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZD'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dLTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dNPer'];?>
 из <?php echo $_smarty_tpl->tpl_vars['l']->value['pNPer'];?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZP'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dNTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['l']->value['dState']];?>
</a></td><?php }} ?>