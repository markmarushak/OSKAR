<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 01:45:17
         compiled from "tpl/en/message/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10203899395a7665ad3e0cd2-33309168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2529b1f18255bc30e03c8b2ea6ff3d26da375177' => 
    array (
      0 => 'tpl/en/message/support.tpl',
      1 => 1517700235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10203899395a7665ad3e0cd2-33309168',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7665ad3eaf90_54836753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7665ad3eaf90_54836753')) {function content_5a7665ad3eaf90_54836753($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Support'), 0);?>
<h1>Support request</h1><?php if (isset($_GET['done'])){?><h2>Your request has been sent successfully to support!</h2><p class="info">The administrator will respond to you within 24 hours</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('message/support.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>