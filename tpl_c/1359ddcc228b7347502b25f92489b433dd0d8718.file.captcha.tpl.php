<?php /* Smarty version Smarty-3.1.8, created on 2018-01-17 17:07:48
         compiled from "tpl/en/captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5846900275a5f58b41b9825-88294688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1359ddcc228b7347502b25f92489b433dd0d8718' => 
    array (
      0 => 'tpl/en/captcha.tpl',
      1 => 1514062880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5846900275a5f58b41b9825-88294688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'error_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5f58b41ca766_53505520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5f58b41ca766_53505520')) {function content_5a5f58b41ca766_53505520($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('err.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errs'=>array('captcha_wrong'=>'wrong code')), 0);?>
<?php if ($_smarty_tpl->tpl_vars['class']->value){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable(" ".($_smarty_tpl->tpl_vars['class']->value), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("captcha".($_smarty_tpl->tpl_vars['class']->value).($_smarty_tpl->tpl_vars['error_class']->value), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('captcha/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>