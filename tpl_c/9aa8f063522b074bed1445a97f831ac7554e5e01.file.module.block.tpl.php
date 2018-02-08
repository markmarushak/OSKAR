<?php /* Smarty version Smarty-3.1.8, created on 2018-02-07 23:47:57
         compiled from "tpl/ru\admin\module.block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753159f78344af1647-28168833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa8f063522b074bed1445a97f831ac7554e5e01' => 
    array (
      0 => 'tpl/ru\\admin\\module.block.tpl',
      1 => 1517842582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753159f78344af1647-28168833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f78344b908d8_81229361',
  'variables' => 
  array (
    'modules' => 0,
    'modules_cat' => 0,
    'm' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f78344b908d8_81229361')) {function content_59f78344b908d8_81229361($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['modules']->value){?><h1><?php echo exValue('Прочие',$_smarty_tpl->tpl_vars['modules_cat']->value);?>
</h1><table class="formatTable"><tr><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cc']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['m']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cc']['iteration']++;
?><?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['cc']['iteration']%6)==0){?></tr><tr><?php }?><td width="100px" align="center"><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['m']->value),$_smarty_tpl);?>
"><img src="images/module.png"><br><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</a></td><?php } ?></tr></table><br><?php }?><?php }} ?>