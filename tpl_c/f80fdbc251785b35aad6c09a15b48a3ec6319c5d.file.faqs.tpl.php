<?php /* Smarty version Smarty-3.1.8, created on 2018-01-08 16:07:01
         compiled from "tpl/ru/faq/admin/faqs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12433854065a536cf5ad2025-05952154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80fdbc251785b35aad6c09a15b48a3ec6319c5d' => 
    array (
      0 => 'tpl/ru/faq/admin/faqs.tpl',
      1 => 1514062946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12433854065a536cf5ad2025-05952154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a536cf5b6b4a4_57767526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a536cf5b6b4a4_57767526')) {function content_5a536cf5b6b4a4_57767526($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ','url'=>'*','fields'=>array('fID'=>array('ID'),'fCTS'=>array('<small>Дата добавления</small>'),'fHidden'=>array('<small>Невидимый</small>'),'fCat'=>array('Категория'),'fQuestion'=>array('Вопрос'),'fAnswer'=>array('Ответ'),'fOrder'=>array('<small>Порядок</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'faq/admin/faq'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>