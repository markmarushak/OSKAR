<?php /* Smarty version Smarty-3.1.8, created on 2017-10-30 23:54:25
         compiled from "tpl/ru\udp\about.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182859f78371ec1218-63967533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac73f3cf8c078ccd6eccfecdd25eca50ccd71aca' => 
    array (
      0 => 'tpl/ru\\udp\\about.row.tpl',
      1 => 1509265469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182859f78371ec1218-63967533',
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
  'unifunc' => 'content_59f78372265c14_72094818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f78372265c14_72094818')) {function content_59f78372265c14_72094818($_smarty_tpl) {?><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oCTS'];?>
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