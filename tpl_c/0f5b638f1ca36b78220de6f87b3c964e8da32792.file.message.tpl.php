<?php /* Smarty version Smarty-3.1.8, created on 2017-12-24 23:23:54
         compiled from "tpl/ru/message/admin/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20568650965a400cdac9f964-91464505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5b638f1ca36b78220de6f87b3c964e8da32792' => 
    array (
      0 => 'tpl/ru/message/admin/message.tpl',
      1 => 1514062946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20568650965a400cdac9f964-91464505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a400cdad031d9_53096370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a400cdad031d9_53096370')) {function content_5a400cdad031d9_53096370($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Сообщение'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value['mID']){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Cообщение','fields'=>array('uLogin'=>array('T','Отправитель','skip'=>!$_smarty_tpl->tpl_vars['el']->value['uLogin'],'readonly'=>true),'mMail'=>array('T','e-mail отправителя','skip'=>!$_smarty_tpl->tpl_vars['el']->value['mMail'],'readonly'=>true),'To1'=>array('T','Получатель','default'=>$_smarty_tpl->tpl_vars['el']->value['mTo'],'skip'=>($_smarty_tpl->tpl_vars['el']->value['mToCnt']!=1),'readonly'=>true),'mTo'=>array('A','Получатели<br><<* - всем>>','size'=>30,'skip'=>($_smarty_tpl->tpl_vars['el']->value['mToCnt']==1),'readonly'=>true),'mAttn'=>array('CC','Важное','readonly'=>true),'mTopic'=>array('L','Тема','size'=>50,'readonly'=>true),'mText'=>array('W','Текст','size'=>15,'readonly'=>true)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value['mToCnt']==1){?><a href="<?php echo tplModuleToLink(array('module'=>'message/admin/message'),$_smarty_tpl);?>
?add&re=<?php echo $_smarty_tpl->tpl_vars['el']->value['mID'];?>
" class="button-green">Ответить</a><br><?php }?><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новое сообщение','fields'=>array('Re'=>array(),'uLogin'=>array('T','Отправитель',array('user_not_found'=>'пользователь не найден'),'default'=>valueIf(!$_smarty_tpl->tpl_vars['el']->value['mMail'],exValue($_smarty_tpl->tpl_vars['user']->value['uLogin'],$_GET['from']))),'mMail'=>array('T','e-mail отправителя',array('mail_wrong'=>'неверный e-mail')),'mTo'=>array('A','Получатели!!<br><<Одна строка - один получатель<br>Для отправки на e-mail указывайте префикс "mailto:">>',array('to_empty'=>'укажите получателей','to_wrong'=>"получатели не найдены: [".($_smarty_tpl->tpl_vars['wrusrs']->value)."]"),'size'=>30,'default'=>$_GET['to'],'comment'=>$_smarty_tpl->tpl_vars['el']->value['mLang']),'mAttn'=>array('CC','Важное'),'Feed'=>array('CC','Рассылка'),'mTopic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50),'mText'=>array('Y','Текст!!',array('text_empty'=>'укажите текст'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('send'=>'Отправить')), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>