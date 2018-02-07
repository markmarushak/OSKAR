<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 19:42:13
         compiled from "tpl/ru/refsys/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20864568625a5fe57d833df7-53029085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5608d2a577ebc05d771d2bba4941fe9194064f9f' => 
    array (
      0 => 'tpl/ru/refsys/index.tpl',
      1 => 1516293729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20864568625a5fe57d833df7-53029085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe57d8cf039_71850632',
  'variables' => 
  array (
    'refurl' => 0,
    'reflogin' => 0,
    'refs' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe57d8cf039_71850632')) {function content_5a5fe57d8cf039_71850632($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Баунти - система'), 0);?>
<div class="table-section baunti"><div class="header-section"><div class="header-box" style="min-height:200px"><h1 class="text-center uppercase">Моя баунти ссылка</h1><h1 class="text-center uppercase">10% РЕФБЕК</h1><br><span class="no-uppercase">"<a href=\"<?php echo $_smarty_tpl->tpl_vars['refurl']->value;?>
\" target=\"_blank\"><?php echo $_smarty_tpl->tpl_vars['refurl']->value;?>
</a>"</span></div></div><div class="footer-section"><div class ="tttt" style="background-image: url(../assets/img/vozvrat.jpg); min-height:200px;  background-repeat: no-repeat; width:11%; margin:0 auto;" ></div><ul class="depo_btn"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'cabinet','text'=>'Личный кабинет'), 0);?>
<?php }?></ul></div></div><div class="text-center"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('RefLogin'=>array('X','Вас пригласил',0,$_smarty_tpl->tpl_vars['reflogin']->value,'skip'=>!$_smarty_tpl->tpl_vars['reflogin']->value),'RefURL'=>array('','Ваша Баунти &nbsp;',0,"<a href=\"".($_smarty_tpl->tpl_vars['refurl']->value)."\" target=\"_blank\">".($_smarty_tpl->tpl_vars['refurl']->value)."</a>"),'Refs'=>array('U','refsys/_refs.tpl','skip'=>!$_smarty_tpl->tpl_vars['refs']->value)),'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Инвайты</h2><?php }?><?php }?></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>