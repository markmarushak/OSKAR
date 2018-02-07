<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:36:02
         compiled from "tpl/en/system/admin/setup_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11921401455a3e9402049548-52708539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd410dd1bc5cd79d7c5cace65d5cd5208e16e1eba' => 
    array (
      0 => 'tpl/en/system/admin/setup_mail.tpl',
      1 => 1514050016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11921401455a3e9402049548-52708539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e940206ec75_39694490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e940206ec75_39694490')) {function content_5a3e940206ec75_39694490($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'e-Mail'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Host'=>array('T','Server address'),'Port'=>array('I','Port'),'Secure'=>array('C','Secure connection'),'Username'=>array('T','Login'),'Password'=>array('*','Password <<empty - send via php mail()>>'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>