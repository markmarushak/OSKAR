<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 01:41:40
         compiled from "tpl/en/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13188091145a3e9416724915-28414907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72d7d8f1d49c2dab37cdf73777cf0bbba223d030' => 
    array (
      0 => 'tpl/en/index/index.tpl',
      1 => 1517700233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13188091145a3e9416724915-28414907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e94167361d3_80207503',
  'variables' => 
  array (
    'demo' => 0,
    'current_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e94167361d3_80207503')) {function content_5a3e94167361d3_80207503($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Main'), 0);?>
<h1>Main</h1><?php if ($_smarty_tpl->tpl_vars['demo']->value){?><p class="info">Script works in <b>demo</b> mode.<br>Some functions are disabled</p><?php }?>Current language folder: <a href="<?php echo tplModuleToLink(array('module'=>'system'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['current_lang']->value;?>
</a><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>