<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 03:36:40
         compiled from "tpl/ru/edit.block.my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4510899885a3e929bb854d7-05585086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '616d08e1541443fbeddbe70ca7fe47ec4fc74e1d' => 
    array (
      0 => 'tpl/ru/edit.block.my.tpl',
      1 => 1517700212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4510899885a3e929bb854d7-05585086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a3e929bbccf64_71919188',
  'variables' => 
  array (
    'fields' => 0,
    'v' => 0,
    'f' => 0,
    'values' => 0,
    'edit_form_name' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3e929bbccf64_71919188')) {function content_5a3e929bbccf64_71919188($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (is_array($_smarty_tpl->tpl_vars['v']->value)&&!$_smarty_tpl->tpl_vars['v']->value['skip']&&($_smarty_tpl->tpl_vars['v']->value[0]=='Y')){?><script type="text/javascript" src="ckeditor/ckeditor.js"></script><?php break 1?><?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (is_int($_smarty_tpl->tpl_vars['f']->value)){?>						<div class="col-sm-12 form-group text-center namepays"><a name="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"></a><?php if ($_smarty_tpl->tpl_vars['v']->value){?>- <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 -<?php }?></div><?php }elseif(!(is_array($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['v']->value['skip'])){?><div class="form-group col-md-10 col-md-push-1"><?php $_smarty_tpl->tpl_vars['vv'] = new Smarty_variable(_arr_val($_smarty_tpl->tpl_vars['values']->value,$_smarty_tpl->tpl_vars['f']->value), null, 0);?><?php if (is_array($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['v']->value[0]){?>				<?php echo $_smarty_tpl->getSubTemplate ('edit.row.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><input name="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['v']->value)){?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?>" type="hidden"><?php }?></div><?php }?><?php } ?><?php }} ?>