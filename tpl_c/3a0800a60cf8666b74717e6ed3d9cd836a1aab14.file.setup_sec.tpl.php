<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:35:58
         compiled from "tpl/en/system/admin/setup_sec.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13515080845a3e93fe466ac6-10433994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0800a60cf8666b74717e6ed3d9cd836a1aab14' => 
    array (
      0 => 'tpl/en/system/admin/setup_sec.tpl',
      1 => 1514050016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13515080845a3e93fe466ac6-10433994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
    'via_https' => 0,
    'curr_ip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e93fe493aa3_42109170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e93fe493aa3_42109170')) {function content_5a3e93fe493aa3_42109170($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Security'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('HTTPSMode'=>array('S',"Use http<b>s</b> <<to change use https://>>",0,array(0=>'only at secure pages',1=>'always'),'readonly'=>!$_smarty_tpl->tpl_vars['via_https']->value),'MinPIN'=>array('I','Min PIN-code length <<0 - do not use>>'),'MinSQA'=>array('I','Min Question/Answer length <<0 - do not use>>'),'BFC'=>array('I','Brute force checking (N wrong logins) <<0 - do not use>>'),'IP'=>array('S','IP-address change cheking',0,array(0=>'no',1=>'x.0.0.0',2=>'x.x.0.0',3=>'x.x.x.0',4=>'x.x.x.x')),'ForceReConfig'=>array('C','Require verification of "Personal Settings" after registration'),'PassTime'=>array('I','User must change password every N days <<0 - no>>'),'TimeOut'=>array('I','Autologout after N minutes <<0 - do not use>>'),'_IPs'=>array('A',"IP-addresses that are allowed to access the Control Panel <br> <<one line - one address in the format xxxx>> <br> your current IP: <b> ".($_smarty_tpl->tpl_vars['curr_ip']->value)." </ b> "))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>