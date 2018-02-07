<?php /* Smarty version Smarty-3.1.8, created on 2018-01-07 15:19:06
         compiled from "tpl/ru/account/login/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19861724845a52103a7327a7-96517610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6e624c4736778da05b502c04aa945d0f252dd26' => 
    array (
      0 => 'tpl/ru/account/login/login.tpl',
      1 => 1514062940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19861724845a52103a7327a7-96517610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_cfg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a52103a7d45c9_01465322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a52103a7d45c9_01465322')) {function content_5a52103a7d45c9_01465322($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="text-center logins table-section overflow-hidden"><div class="vertical-middle"><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>или</h3><?php }?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Логин'), null, 0);?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/login/login'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'login_frm1','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'login_not_found'=>"неверная пара ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'not_active'=>'e-mail аккаунта не подтвержден','banned'=>"доступ в аккаунт приостановлен до ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'аккаунт заблокирован')),'Pass'=>array('*','Пароль!!',array()),'Remember'=>array('CC','Запомнить',array()),'URL'=>$_smarty_tpl->tpl_vars['url']->value),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LoginCaptcha'],'btn_text'=>'Войти'), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>