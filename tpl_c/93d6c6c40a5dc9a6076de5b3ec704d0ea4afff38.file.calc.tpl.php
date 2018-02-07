<?php /* Smarty version Smarty-3.1.8, created on 2018-01-09 05:23:26
         compiled from "tpl/en/depo/calc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2171259765a54279ecf4122-95284058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d6c6c40a5dc9a6076de5b3ec704d0ea4afff38' => 
    array (
      0 => 'tpl/en/depo/calc.tpl',
      1 => 1514062908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2171259765a54279ecf4122-95284058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a54279ed041c6_90213816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a54279ed041c6_90213816')) {function content_5a54279ed041c6_90213816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Calculator'), 0);?>
<h1>Investor calculator</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.result.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>