<?php /* Smarty version Smarty-3.1.8, created on 2018-01-17 17:07:48
         compiled from "tpl/ru/captcha/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17463871745a5f58b43fca73-16152951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea8f5622b231ca3909e70f7ef55a07c6f7578c0e' => 
    array (
      0 => 'tpl/ru/captcha/default/index.tpl',
      1 => 1514062943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17463871745a5f58b43fca73-16152951',
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
  'unifunc' => 'content_5a5f58b4409893_77599700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5f58b4409893_77599700')) {function content_5a5f58b4409893_77599700($_smarty_tpl) {?><table class="formatTable"><tr><td align="right"><?php echo $_smarty_tpl->tpl_vars['__Capt']->value;?>
</td><td><label for="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
_capt"><span class="descr_req">Код с картинки<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
</span></label><br><?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<input name="__Capt" id="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
_capt" type="text" size="8" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"></td></tr></table><?php }} ?>