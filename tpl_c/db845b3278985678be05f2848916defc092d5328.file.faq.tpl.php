<?php /* Smarty version Smarty-3.1.8, created on 2018-01-11 16:38:55
         compiled from "tpl/ru/faq/admin/faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13647649205a5768ef3d1190-09158070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db845b3278985678be05f2848916defc092d5328' => 
    array (
      0 => 'tpl/ru/faq/admin/faq.tpl',
      1 => 1514062946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13647649205a5768ef3d1190-09158070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    'cats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5768ef4621d6_38894773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5768ef4621d6_38894773')) {function content_5a5768ef4621d6_38894773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Вопрос','title_new'=>'Новый вопрос','fields'=>array('fID'=>array(),'fCTS'=>array('X','Дата добавления','skip'=>!$_smarty_tpl->tpl_vars['el']->value['fID']),'fHidden'=>array('C','Невидимый'),'fCat'=>array('S','Категория!!',array(),array(''=>'- нет -')+(array)$_smarty_tpl->tpl_vars['cats']->value,'skip'=>!$_smarty_tpl->tpl_vars['cats']->value),'fQuestion'=>array('L','Вопрос!!',array('question_empty'=>'укажите вопрос'),'size'=>50),'fAnswer'=>array('Y','Ответ!!',array('answer_empty'=>'укажите ответ'),'size'=>15),'fOrder'=>array('I','Порядок <<сортировки>>')),'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>