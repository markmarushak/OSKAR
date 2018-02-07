<?php /* Smarty version Smarty-3.1.8, created on 2018-01-09 17:43:43
         compiled from "tpl/ru/account/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3489825865a54d51f8843c2-20131440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb3cf88e0b7703fa9496e9384b542931a20fce94' => 
    array (
      0 => 'tpl/ru/account/index.tpl',
      1 => 1514062914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3489825865a54d51f8843c2-20131440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_cfg' => 0,
    'user' => 0,
    'utz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a54d51f97a371_15436504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a54d51f97a371_15436504')) {function content_5a54d51f97a371_15436504($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Аккаунт'), 0);?>
<h1>Личные параметры</h1><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sec_ForceReConfig']&&$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig']){?><p class="info">Перед началом работы Вы должны задать свои личные параметры</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','title1'=>'Параметры','fields'=>array('aName'=>array('T','Ваше имя!!',array('name_empty'=>'укажите имя'),'readonly'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LockData'],'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseName']==0)),'uLogin'=>array('X','Ваш логин',0,'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']),'uMail'=>array('X','Ваш e-mail'),'aTel'=>array('T','Ваш номер телефона!! <<с кодом страны>>',array('tel_wrong'=>'неверный номер'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['SMS_REG']),'TZ'=>array('T','Ваш часовой пояс!! <<от GMT>>',array('tz_wrong'=>'неверное смещение [ч:м]'),'comment'=>'+4:00 = Москва','default'=>$_smarty_tpl->tpl_vars['utz']->value,'size'=>6),'aNoMail'=>array('C','Не получать оповещения на e-mail','skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_NoMail']),99=>'Безопасность','aIPSec'=>array('S','Контроль смены IP-адреса',0,array(0=>'- по умолчанию -',1=>'x.0.0.0',2=>'x.x.0.0',3=>'x.x.x.0',4=>'x.x.x.x')),'aSessIP'=>array('C','Привязывать сессию к IP-адресу'),'aSessUniq'=>array('C','Запретить параллельные сессии'),'aTimeOut'=>array('I','Автовыход через N минут <<0 - по умолчанию>>'),'aSQuestion'=>array('T','Контрольный вопрос!!',array('secq_empty'=>'укажите вопрос','secq_short'=>"вопрос слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('*','Контрольный ответ <<заполните чтобы сменить>>',array('seca_empty'=>'укажите ответ','seca_short'=>"ответ слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]",'seqa_equal_secq'=>'ответ не может совпадать с вопросом'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'PIN'=>array('*','Введите PIN-код!! <<чтобы подтвердить изменения>>',array('pin_wrong'=>'неверный код'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']==0),'size'=>8)),'values'=>$_smarty_tpl->tpl_vars['user']->value,'hide_cancel'=>$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig']), 0);?>
<?php if (!($_smarty_tpl->tpl_vars['_cfg']->value['Sec_ForceReConfig']&&$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig'])){?><br><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><a href="<?php echo tplModuleToLink(array('module'=>'account/loginza'),$_smarty_tpl);?>
" class="button-gray">Профили</a>&nbsp;<?php }?><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Account_LockData']){?><a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
" class="button-green">Сменить e-mail</a>&nbsp;<?php }?><a href="<?php echo tplModuleToLink(array('module'=>'account/change_pass'),$_smarty_tpl);?>
" class="button-green">Сменить пароль</a><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>