<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 12:33:49
         compiled from "tpl/ru\depo\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217455a7c15877f9191-62287348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '387a159554210e1096b1312da834ec3010860c1c' => 
    array (
      0 => 'tpl/ru\\depo\\index.tpl',
      1 => 1518082428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217455a7c15877f9191-62287348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7c1587a7daa3_41076635',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7c1587a7daa3_41076635')) {function content_5a7c1587a7daa3_41076635($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Депозиты'), 0);?>
<h1>Депозиты</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('dID'=>array('ID'),'dCTS'=>array('Дата начала'),'cName'=>array('Плат.система'),'dZD'=>array('Сумма'),'pName'=>array('План'),'dLTS'=>array('Посл.начисление'),'dN'=>array('Начислений'),'dZP'=>array('<small>Начислено</small>'),'dNTS'=>array('След.начисление'),'dState'=>array('Статус')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?>У Вас <b>нет вкладов</b><br><br><?php }?><div class="table-section baunti"><div class="item-button-top"><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" class="green-button">Сделать вклад</a></div><div class="item-button-top"><!-- <ul class="depo_btn">  --><a href="<?php echo tplModuleToLink(array('module'=>'cabinet'),$_smarty_tpl);?>
" class="green-button">Личный кабинет</a></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>