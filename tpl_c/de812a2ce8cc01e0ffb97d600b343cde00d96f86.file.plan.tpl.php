<?php /* Smarty version Smarty-3.1.8, created on 2017-11-03 00:19:58
         compiled from "tpl/ru\depo\admin\plan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2611159fb7dee72f091-42687528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de812a2ce8cc01e0ffb97d600b343cde00d96f86' => 
    array (
      0 => 'tpl/ru\\depo\\admin\\plan.tpl',
      1 => 1396424472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2611159fb7dee72f091-42687528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59fb7deea461d6_59601531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fb7deea461d6_59601531')) {function content_59fb7deea461d6_59601531($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'План'), 0);?>
<?php ob_start();?><?php echo tplModuleToLink(array('module'=>'calendar/admin/days'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'План','title_new'=>'Новый план','fields'=>array('pID'=>array(),'pHidden'=>array('C','Невидимый'),'pNoCalc'=>array('C','Не начислять'),'pGroup'=>array('I','Номер группы планов'),'pName'=>array('L','Наименование!!',array('name_empty'=>'укажите наименование')),'pDescr'=>array('W','Описание'),'pMin'=>array('$','Мин. сумма!! <<включительно>>',array('min_wrong'=>'укажите минимальную сумму [от 0.010]')),'pMax'=>array('$','Макс. сумма!! <<НЕвключительно>>',array('max_wrong'=>'укажите максимальную сумму [до 1000000.000]')),'pBonus'=>array('%','Бонус в процентах'),'pWDays'=>array('C',"Только по <a href=\"".$_tmp1."\" target=\"_blank\">рабочим дням</a> <<если период не более суток>>"),'pPClndr'=>array('C',"Начислять проценты  указанные в каледнадре <<если не указан или 0 - брать из плана>>"),'pPerc'=>array('%','Процент начисления',array('perc_wrong'=>'укажите процент')),'pPer'=>array('I','Период начисления!! <<в часах>>',array('period_wrong'=>'укажите период')),'pNPer'=>array('I','Кол-во периодов <<0 - бессрочно>>'),'pReturn'=>array('%','Процент возврата после окончания срока',array('perc2_wrong'=>'укажите процент'),'default'=>100),1=>'Реинвестирование','pCompndMin'=>array('%','Мин. процент',array('compndmin_wrong'=>'неверное значение')),'pCompndMax'=>array('%','Макс. процент <<0 - запрещено>>',array('compndmax_wrong'=>'неверное значение')),'ДОвклад','pEnAdd'=>array('C','Разрешить'),'pMinAdd'=>array('$','Мин. сумма <<включительно>>'),'Снятие','pClComis'=>array('%','Процент комиссии <<100 - запрещено>>',array('clcomis_wrong'=>'неверное значение'),'default'=>100),'pMPer'=>array('I','Кол-во периодов невозможности снятия'),'pClPer'=>array('I','Кол-во периодов после которых нет комиссии на снятие'),'Ограничения','pGroupReq'=>array('I','Доступен только после депозита с планом из группы<br><<0 - не использовать>>'),'pMaxCount'=>array('I','Макс. кол-во депозитов с этим планом <<0 - нет ограничения>>'),'Специальная реф.система','pDPerc'=>array('A','От вклада<br><<значения по уровням>>'),'pPPerc'=>array('A','От начисления<br><<значения по уровням>>')),'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>