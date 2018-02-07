<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:36:12
         compiled from "tpl/en/cabinet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5032848415a3e940cb2c658-21053258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc535335df5cb50839fbdf3361c5aacecfbfeb5' => 
    array (
      0 => 'tpl/en/cabinet/index.tpl',
      1 => 1514049986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5032848415a3e940cb2c658-21053258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e940cb3d006_38002278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e940cb3d006_38002278')) {function content_5a3e940cb3d006_38002278($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Cabinet'), 0);?>
<h1>Cabinet</h1><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><br><?php echo $_smarty_tpl->getSubTemplate ('balance/_stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>