<?php /* Smarty version Smarty-3.1.8, created on 2017-11-01 20:18:01
         compiled from "tpl/ru\balance\admin\currs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2994559f9f3b926af76-63467351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e63109ab7266344b14fbe1eed1286a98294584d' => 
    array (
      0 => 'tpl/ru\\balance\\admin\\currs.tpl',
      1 => 1351974878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2994559f9f3b926af76-63467351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f9f3b93b3214_16095701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9f3b93b3214_16095701')) {function content_59f9f3b93b3214_16095701($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежные системы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежные системы','url'=>'*','fields'=>array('cID'=>array('ID'),'cCID'=>array('Код'),'cName'=>array('Наименование'),'cCurr'=>array('Валюта'),'cAPI'=>array('API'),'cDisable'=>array('<small>Откл.</small>'),'cCASHIN'=>array('<small>Пополн.</small>'),'cCASHOUT'=>array('<small>Вывод</small>'),'cEX'=>array('<small>Обмен</small>'),'cTR'=>array('<small>Перевод</small>'),'cBUY'=>array('<small>Покупка</small>'),'cSELL'=>array('<small>Продажа</small>'),'cBUY2'=>array('<small>Услуга</small>'),'cSELL2'=>array('<small>Оказ.услуги</small>'),'cGIVE'=>array('<small>Вклад</small>'),'cTAKE'=>array('<small>Снятие</small>'),'cHidden'=>array('<small>Скрыта</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>