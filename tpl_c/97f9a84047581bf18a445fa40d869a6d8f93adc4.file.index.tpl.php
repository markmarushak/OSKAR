<?php /* Smarty version Smarty-3.1.8, created on 2018-01-17 17:07:48
         compiled from "tpl/en/captcha/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20377805815a5f58b41d1f14-02168003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f9a84047581bf18a445fa40d869a6d8f93adc4' => 
    array (
      0 => 'tpl/en/captcha/default/index.tpl',
      1 => 1514062929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20377805815a5f58b41d1f14-02168003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__Capt' => 0,
    'form' => 0,
    'star' => 0,
    'error_text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a5f58b41e4141_51616717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5f58b41e4141_51616717')) {function content_5a5f58b41e4141_51616717($_smarty_tpl) {?><table class="formatTable"><tr><td align="right"><?php echo $_smarty_tpl->tpl_vars['__Capt']->value;?>
</td><td><label for="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
_capt"><span class="descr_req">Code from image<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
</span></label><br><?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<input name="__Capt" id="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
_capt" type="text" size="8" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"></td></tr></table><?php }} ?>