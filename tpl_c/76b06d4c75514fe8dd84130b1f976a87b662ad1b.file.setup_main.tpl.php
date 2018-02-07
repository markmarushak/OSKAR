<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:29:46
         compiled from "tpl/en/system/admin/setup_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5266732905a3e90921f0335-24330458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b06d4c75514fe8dd84130b1f976a87b662ad1b' => 
    array (
      0 => 'tpl/en/system/admin/setup_main.tpl',
      1 => 1514050016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5266732905a3e90921f0335-24330458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e9092213528_26739018',
  'variables' => 
  array (
    'cfg' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e9092213528_26739018')) {function content_5a3e9092213528_26739018($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Main'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['cfg']->value['NeedReConfig']){?><p class="info">Check all script settings</p><?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('SiteName'=>array('T','Site name'),'ForceCharset'=>array('C','Force header "utf-8 encoding" <<for some hostings>>'),'AdminMail'=>array('T','Admin e-mail'),'NotifyMail'=>array('T','Notification center e-mail'),'LockSite'=>array('C','Technical work <<login prohibition>>'),'OutIP'=>array('X','Исходящий IP сервера','default'=>$_tmp1))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>