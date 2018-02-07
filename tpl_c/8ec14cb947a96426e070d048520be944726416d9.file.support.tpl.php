<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 03:27:31
         compiled from "tpl/ru/message/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12775280345a5fe9f3e8de85-93091203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec14cb947a96426e070d048520be944726416d9' => 
    array (
      0 => 'tpl/ru/message/support.tpl',
      1 => 1514062920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12775280345a5fe9f3e8de85-93091203',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5fe9f3f1b4f7_73377209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fe9f3f1b4f7_73377209')) {function content_5a5fe9f3f1b4f7_73377209($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Поддержка'), 0);?>
<h1>Запрос в поддержку</h1><?php if (isset($_GET['done'])){?><h2>Ваш запрос в поддержку успешно отправлен!</h2><p class="info">Администратор ответит Вам в течение 24-х часов</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('message/support.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>