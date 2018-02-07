<?php /* Smarty version Smarty-3.1.8, created on 2018-01-27 14:42:59
         compiled from "tpl/ru\line.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195315a6c65c39c3f70-04539136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b03a5d30bcc8aace950e1a9cb5824c61ec654a5' => 
    array (
      0 => 'tpl/ru\\line.main.tpl',
      1 => 1389882996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195315a6c65c39c3f70-04539136',
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
  'unifunc' => 'content_5a6c65c40f23f0_86157549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6c65c40f23f0_86157549')) {function content_5a6c65c40f23f0_86157549($_smarty_tpl) {?><div class="_menuPanel"><?php $_smarty_tpl->tpl_vars['smenu'] = new Smarty_variable(array(100=>array('depo/calc','Калькулятор'),array('faq','FAQ'),array('depo/top','Топ'),array('review','Отзывы')), null, 0);?><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array(array('cabinet','Кабинет'),array('balance','Операции','count'=>$_smarty_tpl->tpl_vars['count_opers']->value),array('depo','Депозиты'),array('message','Сообщения','count'=>$_smarty_tpl->tpl_vars['count_msg']->value,'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Mode']),array('balance/wallets','Платежные реквизиты'),array('tickets','Тикеты','count'=>$_smarty_tpl->tpl_vars['count_tickets']->value),array('refsys','Реф.система','skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']))+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array()+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }?></div><br><?php }} ?>