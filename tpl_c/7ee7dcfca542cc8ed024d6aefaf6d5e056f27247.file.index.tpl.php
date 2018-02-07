<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 01:52:21
         compiled from "tpl/en/account/reset_pass/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10818823985a5f58b3b67a16-25323244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee7dcfca542cc8ed024d6aefaf6d5e056f27247' => 
    array (
      0 => 'tpl/en/account/reset_pass/index.tpl',
      1 => 1517700278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10818823985a5f58b3b67a16-25323244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5f58b3c11c60_48643325',
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5f58b3c11c60_48643325')) {function content_5a5f58b3c11c60_48643325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Password reset'), 0);?>
<h1>Password reset</h1><?php if (isset($_GET['done'])){?><h2>Operation completed!</h2><p class="info">Now You can <a href="<?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
">login</a> to your account, with <b>new</b> password.<br>After that it must be changed to another</p><?php }elseif(isset($_GET['need_confirm'])){?><h2>Operation NOT completed!</h2><p class="info">To get a temporary password <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">input confirmation code</a><br>or click on the link that was sent to your e-mail.<br><br>If message is not coming, then try <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change e-mail</a></p><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Login'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"input ".($_smarty_tpl->tpl_vars['txt_login']->value),'login_not_found'=>'wrong Login/e-mail','mail_not_found'=>'e-mail not found')),'Mail'=>array('T','e-mail!!',array(),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'])),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ResetPassCaptcha'],'btn_text'=>'Next'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>