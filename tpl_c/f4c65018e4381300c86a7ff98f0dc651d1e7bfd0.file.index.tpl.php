<?php /* Smarty version Smarty-3.1.8, created on 2017-10-31 00:34:13
         compiled from "tpl/ru\refsys\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2808959f773c391ef64-63923142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4c65018e4381300c86a7ff98f0dc651d1e7bfd0' => 
    array (
      0 => 'tpl/ru\\refsys\\index.tpl',
      1 => 1509395631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2808959f773c391ef64-63923142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f773c3aec999_90180268',
  'variables' => 
  array (
    'refurl' => 0,
    'reflogin' => 0,
    'refs' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f773c3aec999_90180268')) {function content_59f773c3aec999_90180268($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Баунти - система'), 0);?>
<div class="table-section baunti"><div class="header-section"><div class="header-box"><h1 class="text-center uppercase">Моя баунти</h1><br><span class="no-uppercase">"<a href=\"<?php echo $_smarty_tpl->tpl_vars['refurl']->value;?>
\" target=\"_blank\"><?php echo $_smarty_tpl->tpl_vars['refurl']->value;?>
</a>"</span></div></div><div class="vertical-middle vert-top"></div><div class="footer-section"><ul class="depo_btn"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'cabinet','text'=>'Личный кабинет'), 0);?>
<?php }?></ul></div></div><br><br><br><div class="text-center"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('RefLogin'=>array('X','Вас пригласил',0,$_smarty_tpl->tpl_vars['reflogin']->value,'skip'=>!$_smarty_tpl->tpl_vars['reflogin']->value),'RefURL'=>array('','Ваша Баунти &nbsp;',0,"<a href=\"".($_smarty_tpl->tpl_vars['refurl']->value)."\" target=\"_blank\">".($_smarty_tpl->tpl_vars['refurl']->value)."</a>"),'Refs'=>array('U','refsys/_refs.tpl','skip'=>!$_smarty_tpl->tpl_vars['refs']->value)),'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Инвайты</h2><?php }?><?php }?></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>