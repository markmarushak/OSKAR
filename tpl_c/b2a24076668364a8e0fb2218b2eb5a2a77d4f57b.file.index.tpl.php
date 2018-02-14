<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 12:08:00
         compiled from "tpl/ru\review\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110395a7c137027c541-18652880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2a24076668364a8e0fb2218b2eb5a2a77d4f57b' => 
    array (
      0 => 'tpl/ru\\review\\admin\\index.tpl',
      1 => 1517842647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110395a7c137027c541-18652880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7c137049b540_80226301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7c137049b540_80226301')) {function content_5a7c137049b540_80226301($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы','url'=>'*','fields'=>array('oID'=>array('ID'),'oTS'=>array('Дата'),'uLogin'=>array('Автор'),'oText'=>array('Текст'),'oState'=>array('<small>Одобрен</small>'),'oOrder'=>array('<small>Вес</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('accept'=>'Одобрить','del'=>'Удалить')), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>