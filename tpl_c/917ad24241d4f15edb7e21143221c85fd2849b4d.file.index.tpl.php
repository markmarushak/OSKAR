<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 01:48:29
         compiled from "tpl/en/account/change_mail/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7931289795a5f58b43175e0-51871060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '917ad24241d4f15edb7e21143221c85fd2849b4d' => 
    array (
      0 => 'tpl/en/account/change_mail/index.tpl',
      1 => 1517700275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7931289795a5f58b43175e0-51871060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5f58b4351da0_32812562',
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5f58b4351da0_32812562')) {function content_5a5f58b4351da0_32812562($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Change e-mail'), 0);?>
<h1>Change e-mail</h1><?php if (isset($_GET['done'])){?><h2>Е-mail changed!</h2><?php }elseif(isset($_GET['need_confirm'])){?><h2>Operation NOT complete!</h2><p class="info">To complete the operation, you must confirm your e-mail.<br>Please <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail.<br><br>If message is not coming, then try <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change e-mail</a></p><?php }elseif(isset($_GET['already_used'])){?><h2>The operation could not be completed!</h2><p class="info">This e-mail can not be confirmed by you,<br>because it is already used by another user</p><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Login'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"input ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'login_not_found'=>"wrong ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'banned'=>"access to the account is suspended ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'account is blocked'),'skip'=>_uid()),'Pass'=>array('*','Пароль!!',array('pass_not_found'=>'wrong Password')),'NewMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailConfirm'],'New e-mail!! <<confirmation will be sent>>','New e-mail!!'),array('mail_empty'=>'input e-mail','mail_wrong'=>'wrong e-mail','mail_used'=>'e-mail is already used'))),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailCaptcha'],'btn_text'=>'Next'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>