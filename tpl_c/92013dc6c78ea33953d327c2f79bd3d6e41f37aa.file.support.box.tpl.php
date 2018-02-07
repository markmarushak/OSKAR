<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 01:45:17
         compiled from "tpl/en/message/support.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17690785115a7665ad3efcf5-23949441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92013dc6c78ea33953d327c2f79bd3d6e41f37aa' => 
    array (
      0 => 'tpl/en/message/support.box.tpl',
      1 => 1517700235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17690785115a7665ad3efcf5-23949441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'cats' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7665ad3fd099_84897429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7665ad3fd099_84897429')) {function content_5a7665ad3fd099_84897429($_smarty_tpl) {?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'fields'=>array('Mail'=>array('T','Your e-mail!!',array('user_not_found'=>'input e-mail','mail_wrong'=>'wrong e-mail'),'skip'=>_uid(),'default'=>$_smarty_tpl->tpl_vars['user']->value['uMail']),'Category'=>array('S','Category',0,$_smarty_tpl->tpl_vars['cats']->value,'skip'=>!$_smarty_tpl->tpl_vars['cats']->value),'Topic'=>array('L','Topic!!',array('topic_empty'=>'input topic'),'size'=>50),'Message'=>array('W','Text!!',array('text_empty'=>'input text'),'size'=>12,'cols'=>60)),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Captcha'],'btn_text'=>'Send'), 0);?>
<?php }} ?>