<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 20:24:37
         compiled from "tpl/ru/udp/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5140508445a510655cc4923-05294634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bcb8a283df2003aea67221cd30029851bf60dd0' => 
    array (
      0 => 'tpl/ru/udp/about.tpl',
      1 => 1514062924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5140508445a510655cc4923-05294634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a510655d505a6_12591845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a510655d505a6_12591845')) {function content_5a510655d505a6_12591845($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="header-box text-center"><h1>Операции</h1><div class="out-chat history-btn"><a href="cabinet"><i class="fa fa-home" aria-hidden="true"></i></a></div></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>' ','url'=>'*','fields'=>array('oTS'=>array('Дата'),'oCID'=>array('Плат.система'),'oSum1'=>array('Приход'),'oSum2'=>array('Расход'),'oBatch'=>array('Batch-номер'),'oState'=>array('Статус'),'oMemo'=>array('Примечание')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>