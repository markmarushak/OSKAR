<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 21:11:12
         compiled from "tpl/ru\balance\oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1524259f773d3b8d8f5-21753905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1da610b2f5e3e9e1e349d97306e0c042f2a9ee' => 
    array (
      0 => 'tpl/ru\\balance\\oper.tpl',
      1 => 1517842585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1524259f773d3b8d8f5-21753905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f773d4489355_04009979',
  'variables' => 
  array (
    'el' => 0,
    'op_names' => 0,
    'dfields' => 0,
    'opc' => 0,
    'b' => 0,
    'oper' => 0,
    '_cfg' => 0,
    'clist' => 0,
    'user' => 0,
    'plans' => 0,
    'pcmax' => 0,
    's' => 0,
    'icurr' => 0,
    'clist2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f773d4489355_04009979')) {function content_59f773d4489355_04009979($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Операция'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="table-section oper overflow-hidden" id="oper"><div class="header-section"><ul class="depo_btn oper-fot-btn"><?php if (_uid()){?><li><a href="<?php echo tplModuleToLink(array('module'=>"cabinet"),$_smarty_tpl);?>
">Назад &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></a></li><?php }?></ul></div><div class="vertical-middle"><div class="text-center"><?php if ($_smarty_tpl->tpl_vars['el']->value){?><h1><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']];?>
</h1><?php if (isset($_GET['check'])){?><p class="info">Ожидание подтверждения оплаты...</p><?php }else{ ?><?php if (($_smarty_tpl->tpl_vars['el']->value['oState']<=1)){?><?php $_smarty_tpl->tpl_vars['opc'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['oOper']!='CASHIN')||$_smarty_tpl->tpl_vars['dfields']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['opc']->value){?><p class="info">Операция НЕ подтверждена Вами!</p><?php }?><?php }elseif($_smarty_tpl->tpl_vars['el']->value['oState']==2){?><p class="info">Операция будет обработана Администратором в ближайшее время</p><?php }?><?php $_smarty_tpl->tpl_vars['b'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=2){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['cancel'] = 'Отменить';?><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']>=5){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['del'] = 'Удалить';?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bt'=>valueIf($_smarty_tpl->tpl_vars['opc']->value,'Подтвердить',' '),'b'=>$_smarty_tpl->tpl_vars['b']->value,'errors'=>array('oper_not_found'=>'неверный статус операции','oper_disabled'=>'операция отключена','low_bal1'=>'недостаточно средств','data_date_wrong'=>'неверная дата операции','data_sum_wrong'=>'неверная сумма','data_batch_wrong'=>'не задан batch-номер операции','batch_exists'=>'операция с таким batch-номером уже существует')), 0);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['oper'] = new Smarty_variable($_GET['add'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['oper']->value=='CASHIN'){?><h1>Пополнение баланса</h1><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Depo_AutoDepo']){?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.interval.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','С платежной системы!!',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('','Комиссия','comment'=>' <i><span id="csum"></span></i>'),'Sum2'=>array('','Ваш баланс будет пополнен на сумму','comment'=>' <i><span id="sum2"></span></i>'),'Plan'=>array('S','План',array('plan_wrong'=>'неверный план'),array(0=>'- авто -')+(array)$_smarty_tpl->tpl_vars['plans']->value,'skip'=>(count($_smarty_tpl->tpl_vars['plans']->value)<=1)),'Compnd'=>array('%','Процент реинвеста <<капитализация>>',array('compnd_wrong'=>"неверное значение [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]",'compnd_wrong1'=>"неверное значение для плана '".($_smarty_tpl->tpl_vars['cplan']->value)."'"),'skip'=>!$_smarty_tpl->tpl_vars['pcmax']->value)),'errors'=>array('oper_disabled'=>'операция отключена')), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='CASHOUT'){?><h1>Вывод средств</h1><?php $_smarty_tpl->tpl_vars['s'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],'Сумма!! <<в единицах внутренней валюты>>','Сумма!!'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','На платежную систему!!',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']),'Sum'=>array('$',$_smarty_tpl->tpl_vars['s']->value,array('sum_wrong'=>'неверная сумма','limit_exceeded'=>'превышен лимит'),'comment'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']," <b>".($_smarty_tpl->tpl_vars['icurr']->value)."</b>",' <i><span id="ccurr"></span></i>')),'Comis'=>array('','Комиссия','comment'=>' <i><span id="csum"></span></i>'),'Sum2'=>array('','На Ваш счет будет выведена сумма','comment'=>' <i><span id="sum2"></span></i>'),'PIN'=>array('*','Введите PIN-код!!',array('pin_wrong'=>'неверный код'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Bal_NeedPIN'],'size'=>8)),'errors'=>array('low_bal1'=>'недостаточно средств','oper_disabled'=>'операция отключена')), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='EX'){?><h1>Обмен валют</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','С платежной системы!!',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Комиссия','comment'=>' <i><span id="csum"></span></i>'),'PSys2'=>array('S','На платежную систему!!',array('psys2_empty'=>'плат.система не указана','psys2_equal_psys'=>'плат.системы должны различаться','ex_rate_not_set'=>'Курс валюты не задан'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist2']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist2']->value),'Sum2'=>array('X','Сумма к получению','comment'=>' <i><span id="sum2"></span></i>')),'errors'=>array('low_bal1'=>'недостаточно средств','oper_disabled'=>'операция отключена')), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='TR'){?><h1>Перевод средств</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],1,array('S','Платежная система!!',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value)),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('','Комиссия','comment'=>' <i><span id="csum"></span></i>'),'Sum2'=>array('','Получателю будет переведена сумма','comment'=>' <i><span id="sum2"></span></i>'),'Login2'=>array('T','Получатель!!',array('user2_empty'=>'пользователь не найден','user2_equal_user'=>'пользователи должны различаться')),'Memo'=>array('W','Примечание','size'=>4)),'errors'=>array('low_bal1'=>'недостаточно средств','oper_disabled'=>'операция отключена')), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oper'=>$_smarty_tpl->tpl_vars['oper']->value,'use_sum2'=>true), 0);?>
<?php }?></div></div><div class="footer-section" id="attantion-pay"><div class="box-pay"><h3>УВАЖАЕМЫЕ ИГРОКИ!</h3><p><p>Начисление валюты на игровой счет  через платежные системы: NixMoney,Perfect Money®,  WebMoney производится в валюте USD. После конвертируется  в рубли автоматически . Расчет конвертации валюты Игрок производит сам.</p><p>BTC 0.012012    USD 68.012 Курс ЦБ.</p><p>Остальные платежные системы работают во внутренней валюте RUB.</p><p>А также, принять участие в беспроигрышной лотерее Вы можете  в BITCOIN, в этом случае, зачисление, игра и расчет средств производится в BITCOIN.</p></p></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>