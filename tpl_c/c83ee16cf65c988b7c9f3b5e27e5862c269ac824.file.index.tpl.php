<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 18:24:17
         compiled from "tpl/ru/cabinet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19415034675a3ec48f614000-85851465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83ee16cf65c988b7c9f3b5e27e5862c269ac824' => 
    array (
      0 => 'tpl/ru/cabinet/index.tpl',
      1 => 1515252248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19415034675a3ec48f614000-85851465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3ec48f66c9c6_46158681',
  'variables' => 
  array (
    'count_opers' => 0,
    '_cfg' => 0,
    'list' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3ec48f66c9c6_46158681')) {function content_5a3ec48f66c9c6_46158681($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Кабинет'), 0);?>
<!-- cabinet --><header class="cabinet table-section white" id="cabinet"><div class="top-wrap"><div class="container "><div class="row"><div class="col-md-12 col-sm-10"><nav class="top-menu" id="top-menu"><!--  <div class="logo"><span></span></div>   --><div class="button_nav_open"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div><ul class="horizontal-menu text-right memu-close-768"><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array(array('balance','Баланс / Пополнение / Вывод','count'=>$_smarty_tpl->tpl_vars['count_opers']->value),array('refsys','Моя Баунти(Реферальная ссылка)','skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']),array('balance/wallets','Платежные реквизиты'))), 0);?>
<li><a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">История</a></li><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'index/index','params'=>'out','text'=>'вернуться на сайт'), 0);?>
</ul></nav></div></div></div></div><div class="vertical-middle main-text"><div class="item-text"><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="table cabinet-table table-hover"><thead><tr><th class="text-center">Пользователь</th><th class="text-center">Сумма депозитов</th></tr></thead><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['RSUM']){?><tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td><?php echo _z($_smarty_tpl->tpl_vars['r']->value['RSUM'],1);?>
</td></tr><?php }?><?php } ?></table><?php }?></div><div class="item-button-top cabinet-next"><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" class="button-green">Играть еще</a><a class="m-gren" href="<?php echo tplModuleToLink(array('module'=>"review"),$_smarty_tpl);?>
">онлайн чат</a></div></div></header><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>