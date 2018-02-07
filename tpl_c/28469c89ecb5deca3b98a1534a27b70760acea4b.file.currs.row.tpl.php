<?php /* Smarty version Smarty-3.1.8, created on 2018-01-06 14:25:35
         compiled from "tpl/ru/balance/admin/currs.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18946383535a50b22f25f952-10077759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28469c89ecb5deca3b98a1534a27b70760acea4b' => 
    array (
      0 => 'tpl/ru/balance/admin/currs.row.tpl',
      1 => 1514062941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18946383535a50b22f25f952-10077759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a50b22f29bdd7_67237391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50b22f29bdd7_67237391')) {function content_5a50b22f29bdd7_67237391($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
</td><td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['l']->value['cCID'];?>
 <?php echo $_smarty_tpl->tpl_vars['l']->value['cCurrID'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cCurr'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['PAPI']['apipass']){?><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
&testapi">тест</a><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cDisabled']){?><b style="color: red">X</b><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cCASHINMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cCASHOUTMode']>0){?>*<?php }?></td><td align="right"><?php if ($_smarty_tpl->tpl_vars['l']->value['cEXMode']>0){?><small><?php echo $_smarty_tpl->tpl_vars['l']->value['cEXOut'];?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value['cEXIn'];?>
</small><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cTRMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cBUYMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cSELLMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cBUY2Mode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cSELL2Mode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cGIVEMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cTAKEMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cHidden']){?>Да<?php }?></td><?php }} ?>