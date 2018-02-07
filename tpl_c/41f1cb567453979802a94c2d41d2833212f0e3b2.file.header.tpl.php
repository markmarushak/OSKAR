<?php /* Smarty version Smarty-3.1.8, created on 2017-10-30 23:53:40
         compiled from "tpl/ru\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:499259f783442f0e13-71976316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f1cb567453979802a94c2d41d2833212f0e3b2' => 
    array (
      0 => 'tpl/ru\\admin\\header.tpl',
      1 => 1354082526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499259f783442f0e13-71976316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'up_category' => 0,
    '_cfg' => 0,
    'root_url' => 0,
    'img_path' => 0,
    'short' => 0,
    'needupdatedb' => 0,
    'tpl_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f78344427365_14854026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f78344427365_14854026')) {function content_59f78344427365_14854026($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><title><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php if ($_smarty_tpl->tpl_vars['up_category']->value){?> - <?php echo $_smarty_tpl->tpl_vars['up_category']->value;?>
<?php }?> | <?php }?>Панель управления | <?php echo $_smarty_tpl->tpl_vars['_cfg']->value['Sys_SiteName'];?>
</title><base href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" /><link rel="shortcut icon" href="favicon.ico"><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
admin.css"><script type="text/javascript" src="js/jquery.js"></script></head><body><center><?php if (!$_smarty_tpl->tpl_vars['short']->value){?><?php echo $_smarty_tpl->getSubTemplate ('line.top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="_body"><table class="formatTable" width="100%"><tr><td align="center" valign="top"><?php if ($_smarty_tpl->tpl_vars['needupdatedb']->value){?><p class="note"><b>ВНИМАНИЕ!</b><br>Необходимо обновить структуру базы данных через <a href="<?php echo $_smarty_tpl->tpl_vars['_cfg']->value['cfg_link'];?>
">Конфигуратор</a></p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/line.module.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_info'=>$_smarty_tpl->tpl_vars['tpl_info']->value), 0);?>
<div class="_content"><?php }?><?php }} ?>