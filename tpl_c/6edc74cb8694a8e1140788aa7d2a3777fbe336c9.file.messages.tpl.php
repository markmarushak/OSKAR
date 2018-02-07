<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 23:23:49
         compiled from "tpl/ru/message/admin/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17315041735a400cd54d10d5-71863612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6edc74cb8694a8e1140788aa7d2a3777fbe336c9' => 
    array (
      0 => 'tpl/ru/message/admin/messages.tpl',
      1 => 1514062946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17315041735a400cd54d10d5-71863612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a400cd5507690_76243047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a400cd5507690_76243047')) {function content_5a400cd5507690_76243047($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Сообщения'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Сообщения','url'=>'*','fields'=>array('bID'=>array('ID'),'mTS'=>array('Дата'),'uLogin'=>array('Отправитель'),'To'=>array('Получатели'),'mTopic'=>array('Тема'),'mText'=>array('Текст')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'message/admin/message'),$_smarty_tpl);?>
?add" class="button-green">Создать</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>