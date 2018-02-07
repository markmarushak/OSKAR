<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 02:26:33
         compiled from "tpl/ru\account\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:700459f82bad59ec44-42116767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8508397d92786f44795a0af45ddab78622a349f1' => 
    array (
      0 => 'tpl/ru\\account\\login\\index.tpl',
      1 => 1514062940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700459f82bad59ec44-42116767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f82bad739e76_23005798',
  'variables' => 
  array (
    'url' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f82bad739e76_23005798')) {function content_59f82bad739e76_23005798($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Вход'), 0);?>
<div class="text-center logins table-section overflow-hidden"><div class="vertical-middle"><h1>Вход</h1><?php if (isset($_GET['ip_changed'])){?><h2>Система безопасности</h2><p class="info">Вы пытаетесь войти в аккаунт с другого IP-адреса.<br>Для продолжения <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail</p><?php }elseif(isset($_GET['brute_force'])){?><h2>Система безопасности</h2><p class="info">До этого пароль был неверно введен несколько раз подряд.<br>Для продолжения <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['url']->value){?>Страница "<i>...<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</i>" требует авторизации<br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><p class="info">В настоящее время на сайте идут технические работы.<br>Вход <b>только</b> для обслуживающего персонала</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('account/login/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><br><a href="<?php echo tplModuleToLink(array('module'=>'account/reset_pass'),$_smarty_tpl);?>
">Забыл пароль</a><br><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']>=0){?><a href="<?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
">Еще нет логина</a><br><?php }?><a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">Подтвердить</a> или <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">сменить</a> e-mail<br><?php }?><?php }?></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>