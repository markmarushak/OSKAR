<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 03:38:24
         compiled from "tpl/ru/faq/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84309325a419c9aaf7045-29938048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88ad5b3f9b946c74af90fc9ca657dc24ee44f4c9' => 
    array (
      0 => 'tpl/ru/faq/index.tpl',
      1 => 1517700258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84309325a419c9aaf7045-29938048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a419c9abc23e1_31741354',
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a419c9abc23e1_31741354')) {function content_5a419c9abc23e1_31741354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ'), 0);?>
<!-- header --><header class="faq table-section white" id="faq"><div class="top-wrap"><div class="container "><div class="row"><div class="col-md-10 col-md-offset-1"><nav class="top-menu" id="top-menu"><div class="logo"><span></span></div><div class="button_nav_open"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div><ul class="horizontal-menu text-right memu-close-768"><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'index','text'=>'на главную'), 0);?>
<li ><a href="<?php echo tplModuleToLink(array('module'=>'udp/rules'),$_smarty_tpl);?>
">ПУБЛИЧНАЯ ОФЕРТА</a></li></ul></nav></div></div></div></div><div class="vertical-middle main-text"><div class="item-text"><h1>Вопросы и ответы</h1></div><div class="faq-btn to"><a href="#qwest"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></div></div></header><?php if ($_smarty_tpl->tpl_vars['list']->value){?><div class="table-section" id="qwest"><div class="vertical-middle"><div class="faq-box text-center"><div class="container"><div class="row"><div class="col-md-12"><div class="row"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><div class="col-md-4"><div class="question" style="cursor: pointer;"><h3><?php echo $_smarty_tpl->tpl_vars['l']->value['fQuestion'];?>
</h3><div class=" answer"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['fCat'];?>
</small><br><?php echo $_smarty_tpl->tpl_vars['l']->value['fAnswer'];?>
</div></div></div><?php } ?></div></div></div></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php }?><script type="text/javascript">$('.answer').hide();$('.question').click(function(){$('.answer').slideToggle();});</script><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>