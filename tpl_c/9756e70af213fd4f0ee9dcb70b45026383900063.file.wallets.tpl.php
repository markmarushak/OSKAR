<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 15:12:05
         compiled from "tpl/ru/balance/wallets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11004626515a3f9995d805b0-87406335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9756e70af213fd4f0ee9dcb70b45026383900063' => 
    array (
      0 => 'tpl/ru/balance/wallets.tpl',
      1 => 1514062915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11004626515a3f9995d805b0-87406335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wfields' => 0,
    '_cfg' => 0,
    'defcurr' => 0,
    'user' => 0,
    'showbutton' => 0,
    'wdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3f9995db6a74_59039092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3f9995db6a74_59039092')) {function content_5a3f9995db6a74_59039092($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежные реквизиты'), 0);?>
<div class="table-section overflow-hidden" id="wallent"><div class="header-section"><div class="text-center"><h1>Ваши платежные реквизиты для пополнения и вывода</h1><br><span>/	<i>не забудьте сохранить данные</i>	/</span></div><div class="btn-si uppercase"><a href="<?php echo tplModuleToLink(array('module'=>"cabinet"),$_smarty_tpl);?>
">личный кабинет</a></div></div><div class="vertical-middle"><?php if (!$_smarty_tpl->tpl_vars['wfields']->value){?><p class="info">Платежные системы не подключены</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?><?php $_smarty_tpl->tpl_vars['wfields'] = new Smarty_variable(array('DefCurr'=>array('S','Платежная система по умолчанию!!',array('psys_wrong'=>'укажите плат.систему'),array(0=>'- выберите -')+(array)$_smarty_tpl->tpl_vars['defcurr']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']))+$_smarty_tpl->tpl_vars['wfields']->value, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['showbutton']->value&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']>0)){?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value[] = '';?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value['PIN'] = array('*','Введите PIN-код!! <<чтобы подтвердить изменения>>',array('pin_wrong'=>'неверный код'),'size'=>8);?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>$_smarty_tpl->tpl_vars['wfields']->value,'values'=>$_smarty_tpl->tpl_vars['wdata']->value,'btn_text'=>valueIf(!$_smarty_tpl->tpl_vars['showbutton']->value,'')), 0);?>
<?php }?></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>