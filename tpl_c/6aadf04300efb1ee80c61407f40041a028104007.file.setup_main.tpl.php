<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 20:54:59
         compiled from "tpl/en\system\admin\setup_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302865a7b3d738162d2-68584764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aadf04300efb1ee80c61407f40041a028104007' => 
    array (
      0 => 'tpl/en\\system\\admin\\setup_main.tpl',
      1 => 1517842569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302865a7b3d738162d2-68584764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7b3d73900906_50530914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b3d73900906_50530914')) {function content_5a7b3d73900906_50530914($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Main'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['cfg']->value['NeedReConfig']){?><p class="info">Check all script settings</p><?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('SiteName'=>array('T','Site name'),'ForceCharset'=>array('C','Force header "utf-8 encoding" <<for some hostings>>'),'AdminMail'=>array('T','Admin e-mail'),'NotifyMail'=>array('T','Notification center e-mail'),'LockSite'=>array('C','Technical work <<login prohibition>>'),'OutIP'=>array('X','Исходящий IP сервера','default'=>$_tmp1))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>