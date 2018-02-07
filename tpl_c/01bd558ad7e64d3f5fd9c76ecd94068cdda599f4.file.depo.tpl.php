<?php /* Smarty version Smarty-3.1.8, created on 2017-11-03 00:19:46
         compiled from "tpl/ru\depo\admin\depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174559fb7de2cbad30-78760281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01bd558ad7e64d3f5fd9c76ecd94068cdda599f4' => 
    array (
      0 => 'tpl/ru\\depo\\admin\\depo.tpl',
      1 => 1362923138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174559fb7de2cbad30-78760281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59fb7de2df20a9_48549397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fb7de2df20a9_48549397')) {function content_59fb7de2df20a9_48549397($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Депозит'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('from_admin'=>true), 0);?>
<?php }else{ ?><?php if ($_GET['user']){?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('from_admin'=>true), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'new','title'=>'Новый депозит','fields'=>array('Login'=>array('T','Пользователь!!',array('user_empty'=>'пользователь не найден'),'default'=>$_GET['user'])),'btn_text'=>'Далее'), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>