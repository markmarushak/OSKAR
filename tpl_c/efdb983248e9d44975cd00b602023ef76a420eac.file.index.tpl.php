<?php /* Smarty version Smarty-3.1.8, created on 2018-01-18 02:12:30
         compiled from "tpl/ru/balance/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14271167945a3f99a4afda22-89835058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdb983248e9d44975cd00b602023ef76a420eac' => 
    array (
      0 => 'tpl/ru/balance/index.tpl',
      1 => 1516230744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14271167945a3f99a4afda22-89835058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3f99a4b28443_84594418',
  'variables' => 
  array (
    '_selfLink' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3f99a4b28443_84594418')) {function content_5a3f99a4b28443_84594418($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Баланс'), 0);?>
<?php if (isset($_GET['fail'])){?><h2>Операция НЕ завершена!</h2><p class="info">Процедура пополнения была прервана или произошла ошибка.<br>Попробуйте <a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
">повторить операцию</a> позже</p><?php }else{ ?><div class="table-section operations" id="operations"><div class="header-section uppercase"><div class="header-box"><h1>Баланс</h1><br><span><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div></div><div class="vertical-middle oper-btn"><a  href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHIN" class="button-green m-gren" >Пополнить</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHOUT" class="button-green m-gren">Вывести</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=TR" class="button-green m-gren">Перевести игроку</a><br></div><div class="footer-section"><ul class="depo_btn oper-fot-btn"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'cabinet','text'=>'Назад'), 0);?>
<?php }?></ul></div></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>