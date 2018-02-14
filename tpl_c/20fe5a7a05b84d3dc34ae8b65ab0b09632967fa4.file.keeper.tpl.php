<?php /* Smarty version Smarty-3.1.8, created on 2018-02-08 00:03:05
         compiled from "tpl/ru\balance\admin\keeper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64795a7b6989149ee4-89034075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fe5a7a05b84d3dc34ae8b65ab0b09632967fa4' => 
    array (
      0 => 'tpl/ru\\balance\\admin\\keeper.tpl',
      1 => 1517842591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64795a7b6989149ee4-89034075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
    'cid' => 0,
    'clist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7b698927aa22_29882790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b698927aa22_29882790')) {function content_5a7b698927aa22_29882790($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Онлайн keeper'), 0);?>
Это online версия программы h-keeper. Десктопную версию с полным функционалом Вы можете скачать с сайта <a href="http://h-keeper.ru">h-keeper.ru</a><br><br><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="Table" border="1"><tr><th>Payment system<th>Balance<th>Result<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['l']->key;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
<td><?php echo _z($_smarty_tpl->tpl_vars['l']->value['balance']['sum'],$_smarty_tpl->tpl_vars['cid']->value,1);?>
<td><?php echo $_smarty_tpl->tpl_vars['l']->value['balance']['result'];?>
<?php } ?></table><h1>Перевод средств</h1><?php if (isset($_GET['batch'])){?><p class="info">Перевод успешно завершен. Batch: <?php echo $_GET['batch'];?>
</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('PSys'=>array('S','Платежная система!!',array('psys_empty'=>'плат.система не указана'),array(0=>'- выберите -')+(array)$_smarty_tpl->tpl_vars['clist']->value),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'неверная сумма')),'To'=>array('T','Кошелек получателя!!',array('wallet_empty'=>'укажите кошелек')),'Memo'=>array('W','Примечание','size'=>4)),'btn_text'=>' ','btns'=>array('send'=>'Отправить')), 0);?>
<?php }else{ ?>Нет платежных систем, с прописанными API<?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>