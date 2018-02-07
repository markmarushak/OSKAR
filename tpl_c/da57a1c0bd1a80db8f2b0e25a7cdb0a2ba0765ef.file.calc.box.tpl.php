<?php /* Smarty version Smarty-3.1.8, created on 2018-01-09 05:23:26
         compiled from "tpl/en/depo/calc.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15937562615a54279ed0c602-96690030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da57a1c0bd1a80db8f2b0e25a7cdb0a2ba0765ef' => 
    array (
      0 => 'tpl/en/depo/calc.box.tpl',
      1 => 1514062908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15937562615a54279ed0c602-96690030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calc_pselect' => 0,
    'calc_compnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a54279ed1da12_14560978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a54279ed1da12_14560978')) {function content_5a54279ed1da12_14560978($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'calc','fields'=>array('sum'=>array('$','Amount','default'=>10),'plan'=>array('S','Plan',0,$_smarty_tpl->tpl_vars['calc_pselect']->value,'skip'=>false),'cmpd'=>array('S','Compaund',0,$_smarty_tpl->tpl_vars['calc_compnd']->value,'skip'=>!$_smarty_tpl->tpl_vars['calc_compnd']->value)),'on_submit'=>'recalc(); return false;','btn_text'=>'Calculate'), 0);?>
<?php }} ?>