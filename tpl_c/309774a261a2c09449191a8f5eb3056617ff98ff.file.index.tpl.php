<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 21:57:39
         compiled from "tpl/ru/depo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10632109285a3ec4df14ae48-22350430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309774a261a2c09449191a8f5eb3056617ff98ff' => 
    array (
      0 => 'tpl/ru/depo/index.tpl',
      1 => 1516301619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10632109285a3ec4df14ae48-22350430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3ec4df171b04_56682465',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3ec4df171b04_56682465')) {function content_5a3ec4df171b04_56682465($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Депозиты'), 0);?>
<h1>Депозиты</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('dID'=>array('ID'),'dCTS'=>array('Дата начала'),'cName'=>array('Плат.система'),'dZD'=>array('Сумма'),'pName'=>array('План'),'dLTS'=>array('Посл.начисление'),'dN'=>array('Начислений'),'dZP'=>array('<small>Начислено</small>'),'dNTS'=>array('След.начисление'),'dState'=>array('Статус')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?>У Вас <b>нет вкладов</b><br><br><?php }?><div class="table-section baunti"><div class="item-button-top to"><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" class="green-button">Сделать вклад</a></div><div class="item-button-top to"><!-- <ul class="depo_btn">  --><a href="2017grand-lottery2018.org/cabinet" class="green-button">Личный кабинет</a></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>