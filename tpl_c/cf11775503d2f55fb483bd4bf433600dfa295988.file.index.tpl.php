<?php /* Smarty version Smarty-3.1.8, created on 2017-12-23 20:36:25
         compiled from "tpl/en/depo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17809294215a3e94192cee96-14392295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf11775503d2f55fb483bd4bf433600dfa295988' => 
    array (
      0 => 'tpl/en/depo/index.tpl',
      1 => 1514049987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17809294215a3e94192cee96-14392295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e9419303425_85422959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e9419303425_85422959')) {function content_5a3e9419303425_85422959($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Deposits'), 0);?>
<h1>Deposits</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('dID'=>array('ID'),'dCTS'=>array('Created'),'cName'=>array('Payment system'),'dZD'=>array('Amount'),'pName'=>array('Plan'),'dLTS'=>array('Last accrual'),'dN'=>array('Accruals count'),'dZP'=>array('<small>Profit</small>'),'dNTS'=>array('Next accrual'),'dState'=>array('State')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?>You <b>do not have deposits</b><br><br><?php }?><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" class="button-green">Make deposit</a><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>