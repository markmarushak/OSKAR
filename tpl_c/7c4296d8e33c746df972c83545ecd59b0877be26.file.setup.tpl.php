<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 14:40:22
         compiled from "tpl/ru/confirm/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14335595905a50b5a6c3aef4-92444788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c4296d8e33c746df972c83545ecd59b0877be26' => 
    array (
      0 => 'tpl/ru/confirm/admin/setup.tpl',
      1 => 1514062944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14335595905a50b5a6c3aef4-92444788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a50b5a6cb8da4_87356039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50b5a6cb8da4_87356039')) {function content_5a50b5a6cb8da4_87356039($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Подтверждение'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Captcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>