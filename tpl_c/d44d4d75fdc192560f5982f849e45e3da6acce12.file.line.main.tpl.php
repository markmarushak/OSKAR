<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:20:57
         compiled from "tpl/ru/line.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9712265725a3e90794b3d24-18446337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44d4d75fdc192560f5982f849e45e3da6acce12' => 
    array (
      0 => 'tpl/ru/line.main.tpl',
      1 => 1513975841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9712265725a3e90794b3d24-18446337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count_opers' => 0,
    'count_msg' => 0,
    '_cfg' => 0,
    'count_tickets' => 0,
    'smenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e90794e5f41_69444710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e90794e5f41_69444710')) {function content_5a3e90794e5f41_69444710($_smarty_tpl) {?><div class="_menuPanel"><?php $_smarty_tpl->tpl_vars['smenu'] = new Smarty_variable(array(100=>array('depo/calc','Калькулятор'),array('faq','FAQ'),array('depo/top','Топ'),array('review','Отзывы')), null, 0);?><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array(array('cabinet','Кабинет'),array('balance','Операции','count'=>$_smarty_tpl->tpl_vars['count_opers']->value),array('depo','Депозиты'),array('message','Сообщения','count'=>$_smarty_tpl->tpl_vars['count_msg']->value,'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Mode']),array('balance/wallets','Платежные реквизиты'),array('tickets','Тикеты','count'=>$_smarty_tpl->tpl_vars['count_tickets']->value),array('refsys','Реф.система','skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']))+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array()+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }?></div><br><?php }} ?>