<?php /* Smarty version Smarty-3.1.8, created on 2018-02-13 15:09:24
         compiled from "tpl/ru\cabinet\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:886259f749124f0342-56732726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708d316670fdb3d91122281195ed71de084bf4f2' => 
    array (
      0 => 'tpl/ru\\cabinet\\index.tpl',
      1 => 1518523763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '886259f749124f0342-56732726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f74912619767_23744238',
  'variables' => 
  array (
    'count_opers' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f74912619767_23744238')) {function content_59f74912619767_23744238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Кабинет'), 0);?>
<!-- cabinet --><header class="cabinet table-section white" id="cabinet"><div class="top-wrap"><div class="container "><div class="row"><div class="col-md-12 col-sm-10"><nav class="top-menu" id="top-menu"><!--  <div class="logo"><span></span></div>   --><div class="button_nav_open"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div><ul class="horizontal-menu text-right memu-close-768"><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array(array('balance','Баланс / Пополнение / Вывод','count'=>$_smarty_tpl->tpl_vars['count_opers']->value),array('refsys','Моя Баунти(Реферальная ссылка)','skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']),array('balance/wallets','Платежные реквизиты'))), 0);?>
<li><a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">История</a></li><li><a href="<?php echo tplModuleToLink(array('module'=>'account'),$_smarty_tpl);?>
">Личные Данные</a></li><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'index/index','params'=>'out','text'=>'вернуться на сайт'), 0);?>
</ul></nav></div></div></div></div><div class="vertical-middle main-text"><div class="item-button-top cabinet-next"><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" class="button-green">Играть еще</a><a class="m-gren" href="<?php echo tplModuleToLink(array('module'=>"review"),$_smarty_tpl);?>
">онлайн чат</a></div></div></header><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>