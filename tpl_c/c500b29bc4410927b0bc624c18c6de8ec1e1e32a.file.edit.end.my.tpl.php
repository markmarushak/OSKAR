<?php /* Smarty version Smarty-3.1.8, created on 2018-01-27 14:49:38
         compiled from "tpl/ru\edit.end.my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:442359f748d01cf3c6-19026815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c500b29bc4410927b0bc624c18c6de8ec1e1e32a' => 
    array (
      0 => 'tpl/ru\\edit.end.my.tpl',
      1 => 1514062902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '442359f748d01cf3c6-19026815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59f748d0541683_30718975',
  'variables' => 
  array (
    'edit_form_name' => 0,
    'captcha' => 0,
    '__Capt' => 0,
    'edit_descr_star' => 0,
    'errors' => 0,
    'error_text' => 0,
    'tpl_errors' => 0,
    'e' => 0,
    'lost_err' => 0,
    'btn_text' => 0,
    'edit_is_new' => 0,
    'btns' => 0,
    'f' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f748d0541683_30718975')) {function content_59f748d0541683_30718975($_smarty_tpl) {?><?php echo tplFormSecurity(array('form'=>$_smarty_tpl->tpl_vars['edit_form_name']->value,'captcha'=>$_smarty_tpl->tpl_vars['captcha']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['__Capt']->value){?><?php echo $_smarty_tpl->getSubTemplate ('captcha.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>$_smarty_tpl->tpl_vars['edit_form_name']->value,'star'=>$_smarty_tpl->tpl_vars['edit_descr_star']->value), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['errors']->value){?><?php echo $_smarty_tpl->getSubTemplate ('err.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>$_smarty_tpl->tpl_vars['edit_form_name']->value,'errs'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>
<?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['edit_form_name']->value]){?><?php $_smarty_tpl->tpl_vars['lost_err'] = new Smarty_variable('', null, 0);?><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['edit_form_name']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['e']->key;
?><?php if ($_smarty_tpl->tpl_vars['e']->value){?><?php $_smarty_tpl->tpl_vars['lost_err'] = new Smarty_variable(($_smarty_tpl->tpl_vars['lost_err']->value).($_smarty_tpl->tpl_vars['e']->value)."<br>", null, 0);?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['lost_err']->value){?><span class="err"><?php echo $_smarty_tpl->tpl_vars['lost_err']->value;?>
</span><?php }?><?php }?><br><?php if ($_smarty_tpl->tpl_vars['btn_text']->value!==' '){?><div class="footer-section"><div class="col-md-10 col-md-offset-1 text-center item-button-submit"><button name="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_btn" value="<?php if ($_smarty_tpl->tpl_vars['btn_text']->value){?><?php echo $_smarty_tpl->tpl_vars['btn_text']->value;?>
<?php }elseif(!$_smarty_tpl->tpl_vars['edit_is_new']->value){?>Сохранить<?php }else{ ?>Создать<?php }?>" type="submit" ><?php if ($_smarty_tpl->tpl_vars['btn_text']->value){?><?php echo $_smarty_tpl->tpl_vars['btn_text']->value;?>
<?php }elseif(!$_smarty_tpl->tpl_vars['edit_is_new']->value){?>Сохранить<?php }else{ ?>Создать<?php }?></button></div></div><?php }?><?php if (is_array($_smarty_tpl->tpl_vars['btns']->value)){?><div class="footer-section form-group"><div class="col-md-10 col-md-offset-1 text-center item-button-submit"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['btns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><button name="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_btn<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onClick="return confirm('Подтвердите операцию \'<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
\'');" type="submit" ><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</button><?php } ?></div></div><?php }?></form><?php }} ?>