<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 01:44:01
         compiled from "tpl/en/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19782535645a3e9414d33fa5-26611925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f0bb53df8cc7ba467836f6dd3c0843b5bf2b94a' => 
    array (
      0 => 'tpl/en/news/index.tpl',
      1 => 1517700236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19782535645a3e9414d33fa5-26611925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e9414dcafb7_63186391',
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e9414dcafb7_63186391')) {function content_5a3e9414dcafb7_63186391($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'News'), 0);?>
<h1>News</h1><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="formatTable" width="600px"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><tr><td><h2><?php echo $_smarty_tpl->tpl_vars['l']->value['nTopic'];?>
</h2><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nTS'];?>
</small><?php if ($_smarty_tpl->tpl_vars['l']->value['nAttn']){?>&nbsp;&nbsp;&nbsp;<b style="color: red;">Important!</b><?php }?><div style="padding: 10px; background-color: #F3F3F3;"><?php echo nl2br($_smarty_tpl->tpl_vars['l']->value['nAnnounce']);?>
</div><div style="text-align: right;"><a href="<?php echo tplModuleToLink(array('module'=>'news/show','chpu'=>array($_smarty_tpl->tpl_vars['l']->value['nID'],$_smarty_tpl->tpl_vars['l']->value['nTopic'])),$_smarty_tpl);?>
"><small>read more</small></a></div></td></tr><?php } ?></table><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>