<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 23:24:08
         compiled from "tpl/ru/tickets/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4957983295a400ce8966494-33636521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af1feea77d64f811a6be96790779d46149d7b3a' => 
    array (
      0 => 'tpl/ru/tickets/admin/index.tpl',
      1 => 1514062949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4957983295a400ce8966494-33636521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a400ce8995489_01996582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a400ce8995489_01996582')) {function content_5a400ce8995489_01996582($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Поддержка'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('tickets/_states.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Тикеты','url'=>'*','fields'=>array('tID'=>array('ID'),'tLTS'=>array('Дата'),'uLogin'=>array('Отправитель'),'tTopic'=>array('Тема'),'tText'=>array('Текст'),'tState'=>array('Статус'),'cnt'=>array('Ответов')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'tickets/admin/ticket'),$_smarty_tpl);?>
?add" class="button-green">Создать</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>