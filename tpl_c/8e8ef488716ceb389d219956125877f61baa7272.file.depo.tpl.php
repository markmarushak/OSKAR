<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 14:44:11
         compiled from "tpl/ru/depo/depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12277429485a50b68b5cc4c7-15073682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8ef488716ceb389d219956125877f61baa7272' => 
    array (
      0 => 'tpl/ru/depo/depo.tpl',
      1 => 1514062918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12277429485a50b68b5cc4c7-15073682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    'curr1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a50b68b604dd0_24825590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50b68b604dd0_24825590')) {function content_5a50b68b604dd0_24825590($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Лотерея'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><div class="table-section depo-end white"><div class="header-section"><h2>играйте еще и выигрывайте больше!</h2></div><div class="vertical-middle vert-top"><div class="header-box"><h1 class="text-center uppercase">Вы выиграли !!!</h1><br><span>Ваш выграш состовляет :&nbsp;<?php echo _z($_smarty_tpl->tpl_vars['el']->value['dZD'],$_smarty_tpl->tpl_vars['el']->value['dcID'],1);?>
</span><br><div class="boxxx">срокорм <?php echo $_smarty_tpl->tpl_vars['el']->value['pNPer'];?>
 дня</div><p>рискни и будешь вознагражден!</p></div><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="footer-section depo"><ul class="depo_btn gold"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'cabinet','text'=>'Личный кабинет'), 0);?>
<?php }?></ul></div></div><?php }else{ ?><div class="table-section"><div class="header-section"></div><div class="vertical-middle"><div class="header-box"><h1 class="text-center uppercase">Принять участие</h1><br><span>текущий балланс :&nbsp;<?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }?></span></div><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="footer-section"></div></div><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>