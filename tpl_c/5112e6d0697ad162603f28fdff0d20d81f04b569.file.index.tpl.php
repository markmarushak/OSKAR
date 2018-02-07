<?php /* Smarty version Smarty-3.1.8, created on 2018-02-03 23:13:28
         compiled from "tpl/ru/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14838837385a764218ab8225-98703743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5112e6d0697ad162603f28fdff0d20d81f04b569' => 
    array (
      0 => 'tpl/ru/news/index.tpl',
      1 => 1517696983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14838837385a764218ab8225-98703743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a764218afb783_25501331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a764218afb783_25501331')) {function content_5a764218afb783_25501331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новости'), 0);?>
<h1>Новости</h1><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="formatTable" width="600px"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><tr><td><h2><?php echo $_smarty_tpl->tpl_vars['l']->value['nTopic'];?>
</h2><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nTS'];?>
</small><?php if ($_smarty_tpl->tpl_vars['l']->value['nAttn']){?>&nbsp;&nbsp;&nbsp;<b style="color: red;">Важно!</b><?php }?><div style="padding: 10px; background-color: #F3F3F3;"><?php echo nl2br($_smarty_tpl->tpl_vars['l']->value['nAnnounce']);?>
</div><div style="text-align: right;"><a href="<?php echo tplModuleToLink(array('module'=>'news/show','chpu'=>array($_smarty_tpl->tpl_vars['l']->value['nID'],$_smarty_tpl->tpl_vars['l']->value['nTopic'])),$_smarty_tpl);?>
"><small>читать полностью</small></a></div></td></tr><?php } ?></table><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>