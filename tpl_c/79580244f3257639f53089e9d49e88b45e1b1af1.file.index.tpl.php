<?php /* Smarty version Smarty-3.1.8, created on 2017-11-02 02:31:28
         compiled from "tpl/ru\balance\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418659f74c14daff95-58311929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79580244f3257639f53089e9d49e88b45e1b1af1' => 
    array (
      0 => 'tpl/ru\\balance\\index.tpl',
      1 => 1509575146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418659f74c14daff95-58311929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f74c1504c000_77192565',
  'variables' => 
  array (
    '_selfLink' => 0,
    '_cfg' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f74c1504c000_77192565')) {function content_59f74c1504c000_77192565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Баланс'), 0);?>
<?php if (isset($_GET['fail'])){?><h2>Операция НЕ завершена!</h2><p class="info">Процедура пополнения была прервана или произошла ошибка.<br>Попробуйте <a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
">повторить операцию</a> позже</p><?php }else{ ?><div class="table-section operations" id="operations"><div class="header-section uppercase"><div class="header-box"><h1>Баланс</h1><br><span><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div></div><div class="vertical-middle oper-btn"><a  href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHIN" class="button-green m-gren" >Пополнить</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHOUT" class="button-green m-gren">Вывести</a><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=EX" class="button-green m-gren">Обменять</a><?php }?>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=TR" class="button-green m-gren">Перевести</a><br></div><div class="footer-section"><ul class="depo_btn oper-fot-btn"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'cabinet','text'=>'Личный кабинет'), 0);?>
<?php }?></ul></div></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>