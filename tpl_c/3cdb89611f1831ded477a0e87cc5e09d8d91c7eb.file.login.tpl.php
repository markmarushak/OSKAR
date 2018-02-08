<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 12:15:14
         compiled from "tpl/ru\account\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:626259f7be688b3226-62605823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cdb89611f1831ded477a0e87cc5e09d8d91c7eb' => 
    array (
      0 => 'tpl/ru\\account\\login\\login.tpl',
      1 => 1517842580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '626259f7be688b3226-62605823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f7be68a2d5b6_61971485',
  'variables' => 
  array (
    '_cfg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f7be68a2d5b6_61971485')) {function content_59f7be68a2d5b6_61971485($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="text-center logins table-section overflow-hidden"><div class="vertical-middle"><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>или</h3><?php }?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Логин'), null, 0);?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/login/login'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'login_frm1','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'login_not_found'=>"неверная пара ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'not_active'=>'e-mail аккаунта не подтвержден','banned'=>"доступ в аккаунт приостановлен до ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'аккаунт заблокирован')),'Pass'=>array('*','Пароль!!',array()),'Remember'=>array('CC','Запомнить',array()),'URL'=>$_smarty_tpl->tpl_vars['url']->value),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LoginCaptcha'],'btn_text'=>'Войти'), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>