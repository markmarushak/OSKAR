<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 20:24:37
         compiled from "tpl/ru/udp/about.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18030888025a510655d62a71-29916191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '289f6b4172d1fd8ba001a37a0b30371086c3691a' => 
    array (
      0 => 'tpl/ru/udp/about.row.tpl',
      1 => 1514062924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18030888025a510655d62a71-29916191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'op_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a510655dbd2d1_51704375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a510655dbd2d1_51704375')) {function content_5a510655dbd2d1_51704375($_smarty_tpl) {?><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oCTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</td><td ><?php if (in_array($_smarty_tpl->tpl_vars['l']->value['oOper'],array('BONUS','CASHIN','EXIN','TRIN','SELL','REF','TAKE','CALCIN'))){?><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oSum'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
<?php if ($_smarty_tpl->tpl_vars['l']->value['oComis']!=0){?><br><sup><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oComis'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</sup><?php }?><?php }?></td><td><?php if (in_array($_smarty_tpl->tpl_vars['l']->value['oOper'],array('PENALTY','CASHOUT','EX','TR','BUY','GIVE','CALCOUT'))){?><span style="color: red;"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oSum'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</span><?php if ($_smarty_tpl->tpl_vars['l']->value['oComis']!=0){?><br><sup><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oComis'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</sup><?php }?><?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oBatch'];?>
</td><td class="nowrap"><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
"><?php if ($_smarty_tpl->tpl_vars['l']->value['oNTS']){?><b><?php echo $_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['oState']];?>
</b><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['oState']];?>
<?php }?></a><?php if ($_smarty_tpl->tpl_vars['l']->value['oNTS']){?><br><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oNTS'];?>
</small><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['oParams']['user']){?><i><?php echo $_smarty_tpl->tpl_vars['l']->value['oParams']['user'];?>
</i> <?php }?><small><?php if ($_smarty_tpl->tpl_vars['l']->value['oMemo'][0]=='~'){?>Ошибка<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['l']->value['oMemo'];?>
<?php }?></small></td><?php }} ?>