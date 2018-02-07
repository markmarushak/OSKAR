<?php /* Smarty version Smarty-3.1.8, created on 2018-02-03 23:54:16
         compiled from "tpl/en/line.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11182199535a3e940cb62a61-86557953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3fa159f71ebb6266e981adce85951fd08dd1b5' => 
    array (
      0 => 'tpl/en/line.main.tpl',
      1 => 1517700206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11182199535a3e940cb62a61-86557953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e940cb926e3_13871782',
  'variables' => 
  array (
    'count_opers' => 0,
    'count_msg' => 0,
    '_cfg' => 0,
    'count_tickets' => 0,
    'smenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e940cb926e3_13871782')) {function content_5a3e940cb926e3_13871782($_smarty_tpl) {?><div class="_menuPanel"><?php $_smarty_tpl->tpl_vars['smenu'] = new Smarty_variable(array(100=>array('depo/calc','Calculator'),array('faq','FAQ'),array('depo/top','Top'),array('review','Reviews')), null, 0);?><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array(array('cabinet','Cabinet'),array('balance','Operations','count'=>$_smarty_tpl->tpl_vars['count_opers']->value),array('depo','Deposits'),array('message','Messages','count'=>$_smarty_tpl->tpl_vars['count_msg']->value,'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Mode']),array('balance/wallets','Payment details'),array('tickets','Tickets','count'=>$_smarty_tpl->tpl_vars['count_tickets']->value),array('refsys','Referral system','skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']))+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array()+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }?></div><br><?php }} ?>