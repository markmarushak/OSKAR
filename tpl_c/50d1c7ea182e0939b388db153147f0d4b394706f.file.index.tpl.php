<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 03:03:54
         compiled from "tpl/ru/review/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134516615a5fe46a1120a0-47673079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d1c7ea182e0939b388db153147f0d4b394706f' => 
    array (
      0 => 'tpl/ru/review/admin/index.tpl',
      1 => 1514062948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134516615a5fe46a1120a0-47673079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe46a19de45_54570365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe46a19de45_54570365')) {function content_5a5fe46a19de45_54570365($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы','url'=>'*','fields'=>array('oID'=>array('ID'),'oTS'=>array('Дата'),'uLogin'=>array('Автор'),'oText'=>array('Текст'),'oState'=>array('<small>Одобрен</small>'),'oOrder'=>array('<small>Вес</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('accept'=>'Одобрить','del'=>'Удалить')), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>