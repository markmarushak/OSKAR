<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 14:25:18
         compiled from "tpl/ru/balance/admin/opers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17686591585a50b21ecf8ff8-36591857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d84413f131e609e1abb220353622ad3a8185af' => 
    array (
      0 => 'tpl/ru/balance/admin/opers.tpl',
      1 => 1514062942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17686591585a50b21ecf8ff8-36591857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_form_name' => 0,
    'op_names' => 0,
    'currs' => 0,
    'op_statuses' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a50b21ed87226_78448783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50b21ed87226_78448783')) {function content_5a50b21ed87226_78448783($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Операции'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'opers_filter','url'=>'*'), 0);?>
<table class="formatTable"><tr><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uLogin','v'=>array('T','Пользователь','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uLogin'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oOper','v'=>array('S','Операция',0,array('- все -')+$_smarty_tpl->tpl_vars['op_names']->value),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oOper'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'ocID','v'=>array('S','Плат.система',0,array('- все -')+$_smarty_tpl->tpl_vars['currs']->value),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['ocID'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<tr></tr><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oBatch','v'=>array('T','Batch-номер','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oBatch'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oState','v'=>array('S','Статус',0,array(9=>'- все -')+$_smarty_tpl->tpl_vars['op_statuses']->value),'vv'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oState'],9),'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oMemo','v'=>array('T','<i>Примечание</i>','size'=>20),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oMemo'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
</tr></table><?php echo $_smarty_tpl->getSubTemplate ('edit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Отфильтровать','btns'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),array('clear'=>'Показать все'))), 0);?>
<?php ob_start();?><?php echo valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),' (отфильтровано)');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Операции".$_tmp1,'url'=>'*','fields'=>array('oID'=>array('ID'),'uLogin'=>array('Пользователь'),'oTS'=>array('Создано<br>Обработно'),'oOper'=>array('Операция'),'oCID'=>array('Плат.система<br><small>Счет</small>'),'oSum'=>array('Сумма<br><small>Комиссия</small>'),'oBatch'=>array('Batch-номер'),'oState'=>array('Статус'),'oMemo'=>array('Примечание')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('complete'=>'Выполнить','confirm'=>'Подтв. выполнение','cancel'=>'Отклонить','del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/oper'),$_smarty_tpl);?>
?add" class="button-green">Создать</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>