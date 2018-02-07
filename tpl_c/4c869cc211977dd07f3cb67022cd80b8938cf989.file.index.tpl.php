<?php /* Smarty version Smarty-3.1.8, created on 2018-01-09 17:07:28
         compiled from "tpl/ru/account/change_mail/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15818504675a54cca083d133-70931235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c869cc211977dd07f3cb67022cd80b8938cf989' => 
    array (
      0 => 'tpl/ru/account/change_mail/index.tpl',
      1 => 1514062939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15818504675a54cca083d133-70931235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a54cca087a737_17647812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a54cca087a737_17647812')) {function content_5a54cca087a737_17647812($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Смена e-mail'), 0);?>
<h1>Смена e-mail</h1><?php if (isset($_GET['done'])){?><h2>Е-mail заменен на новый!</h2><?php }elseif(isset($_GET['need_confirm'])){?><h2>Операция НЕ завершена!</h2><p class="info">Для завершения операции Вы должны подтвердить свой e-mail.<br>Для этого <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail.<br><br>Если письмо долго не приходит, то попробуйте <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">сменить e-mail</a></p><?php }elseif(isset($_GET['already_used'])){?><h2>Операция не может быть завершена!</h2><p class="info">Этот e-mail не может быть подтвержден Вами,<br>т.к. он уже используется другим пользователем</p><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Логин'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'login_not_found'=>"неверная пара ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'banned'=>"доступ в аккаунт приостановлен до ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'аккаунт заблокирован'),'skip'=>_uid()),'Pass'=>array('*','Пароль!!',array('pass_not_found'=>'неверный Пароль')),'NewMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailConfirm'],'Новый e-mail!! <<будет выслано подтверждение>>','Новый e-mail!!'),array('mail_empty'=>'укажите e-mail','mail_wrong'=>'неверный e-mail','mail_used'=>'e-mail уже используется'))),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailCaptcha'],'btn_text'=>'Далее'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>