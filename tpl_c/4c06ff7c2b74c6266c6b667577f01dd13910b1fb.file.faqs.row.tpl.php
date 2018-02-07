<?php /* Smarty version Smarty-3.1.8, created on 2018-01-11 16:46:15
         compiled from "tpl/ru/faq/admin/faqs.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13521309145a576aa725a3d6-12415574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c06ff7c2b74c6266c6b667577f01dd13910b1fb' => 
    array (
      0 => 'tpl/ru/faq/admin/faqs.row.tpl',
      1 => 1514062946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13521309145a576aa725a3d6-12415574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a576aa72ea940_49905418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a576aa72ea940_49905418')) {function content_5a576aa72ea940_49905418($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/httpd/vhosts/2017grand-lottery2018.org/httpdocs/smarty3/plugins/modifier.truncate.php';
?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['fID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['fCTS'];?>
</small></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['fHidden']){?>*<?php }?></td><td><small><?php echo $_smarty_tpl->tpl_vars['l']->value['fCat'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['fQuestion'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'faq/admin/faq'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['fID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['l']->value['fAnswer'],70);?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['fOrder'];?>
</td><?php }} ?>