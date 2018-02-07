<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 01:49:48
         compiled from "tpl/en/confirm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15604638035a5f58b416dac4-06110398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549fb9550ccd263596d623efd8209f971a4250d4' => 
    array (
      0 => 'tpl/en/confirm/index.tpl',
      1 => 1517700227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15604638035a5f58b416dac4-06110398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5f58b419be48_61889578',
  'variables' => 
  array (
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5f58b419be48_61889578')) {function content_5a5f58b419be48_61889578($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Confirmation'), 0);?>
<h1>Operation confirmation</h1><?php if (isset($_GET['done'])){?><h2>Operation complete!</h2><?php }else{ ?><?php if (isset($_GET['need_confirm_sms'])){?><h2>Operation NOT complete!</h2><p class="info">To complete the operation, you must input confirmation code<br>that was sent to your phone</p><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'fields'=>array('Code'=>array('T','Confirmation code!!',array('code_empty'=>'input code','code_not_found'=>'wrong code','code_used'=>'code is already outdated','code_expired'=>'code has expired','dif_ip'=>'confirmation from your IP-address can not be done','oper_wrong'=>'wrong operation','oper_unkn'=>'operation is not implemented'),'size'=>40,'default'=>$_GET['code'])),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Confirm_Captcha'],'btn_text'=>'Execute'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>