<?php /* Smarty version Smarty-3.1.8, created on 2017-11-03 00:19:39
         compiled from "tpl/ru\depo\admin\depos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2015759fb7ddbcbe2a1-75814948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb4cb92831460f8a1eac4ef8d92eabed45cf22c' => 
    array (
      0 => 'tpl/ru\\depo\\admin\\depos.tpl',
      1 => 1350204956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015759fb7ddbcbe2a1-75814948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_form_name' => 0,
    'currs' => 0,
    'plans' => 0,
    'ststrs' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59fb7ddc17df36_78640118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fb7ddc17df36_78640118')) {function content_59fb7ddc17df36_78640118($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Депозиты'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'deps_filter','url'=>'*'), 0);?>
<table class="formatTable"><tr><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uLogin','v'=>array('T','Пользователь','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uLogin'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'dcID','v'=>array('S','Плат.система',0,array('- все -')+$_smarty_tpl->tpl_vars['currs']->value),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['dcID'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'dpID','v'=>array('S','План',0,array('- все -')+$_smarty_tpl->tpl_vars['plans']->value),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['dpID'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'dState','v'=>array('S','Статус',0,array(9=>'- все -')+$_smarty_tpl->tpl_vars['ststrs']->value),'vv'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['dState'],9),'l_width'=>'0%','r_width'=>'0%'), 0);?>
</tr></table><?php echo $_smarty_tpl->getSubTemplate ('edit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Отфильтровать','btns'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),array('clear'=>'Показать все'))), 0);?>
<?php ob_start();?><?php echo valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),' (отфильтровано)');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Депозиты".$_tmp1,'url'=>'*','fields'=>array('dID'=>array('ID'),'dCTS'=>array('Дата начала'),'uLogin'=>array('Пользователь'),'cName'=>array('Плат.система'),'dZD'=>array('Сумма'),'pName'=>array('План'),'dLTS'=>array('Посл.начисление'),'dN'=>array('Начислений'),'dZP'=>array('<small>Начислено</small>'),'dNTS'=>array('След.начисление'),'dState'=>array('Статус')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/depo'),$_smarty_tpl);?>
?add" class="button-green">Создать</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>