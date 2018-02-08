<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 12:00:17
         compiled from "tpl/ru\faq\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:519059f7afa9079b16-88304554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c0442158a27f53d11b8f7134d8295228fe59385' => 
    array (
      0 => 'tpl/ru\\faq\\index.tpl',
      1 => 1517842625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519059f7afa9079b16-88304554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f7afa9259c68_10479256',
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f7afa9259c68_10479256')) {function content_59f7afa9259c68_10479256($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ'), 0);?>
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