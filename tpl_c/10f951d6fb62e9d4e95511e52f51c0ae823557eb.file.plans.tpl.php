<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 12:52:22
         compiled from "tpl/ru/depo/admin/plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2913275305a3e9432ab40a6-60924648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f951d6fb62e9d4e95511e52f51c0ae823557eb' => 
    array (
      0 => 'tpl/ru/depo/admin/plans.tpl',
      1 => 1514062945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2913275305a3e9432ab40a6-60924648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e9432ad4741_28411372',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e9432ad4741_28411372')) {function content_5a3e9432ad4741_28411372($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Планы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Планы','url'=>'*','fields'=>array('pID'=>array('ID'),'pHidden'=>array('<small>Невид.</small>'),'pNoCalc'=>array('<small>Не начислять</small>'),'pGroup'=>array('Группа'),'pName'=>array('Наменование'),'pMin'=>array('Мин.'),'pMax'=>array('Макс.'),'pDays'=>array('Длит.'),'pPerc'=>array('<small>Процент</small>'),'z'=>array('<small>Всего вкладов</small>'),'za'=>array('<small>Акт. вкладов</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>