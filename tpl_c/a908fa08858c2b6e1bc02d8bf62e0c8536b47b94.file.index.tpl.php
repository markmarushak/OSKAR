<?php /* Smarty version Smarty-3.1.8, created on 2018-02-14 05:27:09
         compiled from "tpl/ru\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168325a82f86dc5a269-69199898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a908fa08858c2b6e1bc02d8bf62e0c8536b47b94' => 
    array (
      0 => 'tpl/ru\\index\\index.tpl',
      1 => 1518536907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168325a82f86dc5a269-69199898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a82f86e10bad4_95179527',
  'variables' => 
  array (
    'curr1' => 0,
    '_cfg' => 0,
    'valid_ref' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a82f86e10bad4_95179527')) {function content_5a82f86e10bad4_95179527($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Grand Lottery'), 0);?>
<style>.bgimg-1, .bgimg-2, bgimg-4 {position: relative;opacity: 0.65;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;}.bgimg-1 {background-image: url(../img/city3.jpg);min-height: 100%;}.bgimg-2 {background-image: url(../assets/img/city3.jpg);min-height: 400px;}.bgimg-3 {background-image: url(../assets/img/city4.jpg);min-height: 400px;}.bgimg-4 {background-image: url(../assets/img/space.jpg);min-height: 400px;}.caption {position: absolute;left: 0;top: 50%;width: 100%;text-align: center;color: #000;}.descr_req {background-color: #111;color: #fff;}.caption span.border {background-color: #111;color: #fff;padding: 18px;font-size: 25px;letter-spacing: 10px;}h3 {letter-spacing: 5px;text-transform: uppercase;font: 20px "Lato", sans-serif;color: #111;}/* Turn off parallax scrolling for tablets and phones */@media only screen and (max-device-width: 1024px) {.bgimg-1, .bgimg-2, .bgimg-3 {background-attachment: scroll;}}</style><!-- header --><seection class="header table-section white" id="header"><div class="top-wrap"><div class="container "><div class="row"><div class="col-md-10 col-md-offset-1"><nav class="top-menu" id="top-menu"><div class="button_nav_open"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div><ul class="horizontal-menu text-right memu-close-768"><div><a href="https://vk.com/club5263034" id="soc1"></a></div><li><a href="<?php echo tplModuleToLink(array('module'=>"faq"),$_smarty_tpl);?>
">faq</a></li><li><a href="<?php echo tplModuleToLink(array('module'=>'udp/rules'),$_smarty_tpl);?>
">ПРАВОВЫЕ ДОКУМЕНТЫ</a></li><li class="ancor closes-menu"><a href="#baunti">баунти</a></li><li class="ancor closes-menu"><a href="#contact">поддержка</a></li><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'cabinet','text'=>"личный кабинет"), 0);?>
<?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/login','params'=>'out','text'=>'Выход'), 0);?>
<?php }else{ ?><li><a data-toggle="modal" data-target="#login">вход</a></li><?php }?></ul></nav></div></div></div></div><div class="vertical-middle main-text"><div class="item-text"><h1>Лотерея <b style="font-size:56pt">4</b>U </h1><h1>CASHBACK - 100%</h1></div><div class="item-button-top to"><a href="#form-to"> принять участие</a></div></div></seection><!-- <section class="secrvices table-section section section-color2" id="about">    </section>  --><div style="background-color:white;text-align:center;padding:50px 80px;font-size:1.2em"><!-- <h3 style="text-align:center;">Лотерея</h3>  </br>  --><p> Это вам не рулетка, которую невозможно обыграть и не игра в наперсток, где <br>предугадать что-либо почти не возможно. <br>Все что вам нужно сделать, это принять участие. <br>Система РАНДОМНО выберет на какой длины план: 1-4 дня - упадет Ваш депозит и <br>сколько Вы получите прибыли от 7%-1 день до 300%-4 дня.  </br><br>АКЦИЯ: ТОЛЬКО ПРАЗДНИКИ! С 26 ДЕКАБРЯ ПО 25 ФЕВРАЛЯ РАБОТАЕТ СИСТЕМА <br><b> CASH BACK - 100%</b> , ЭТО ВОЗВРАТ СУММЫ УЧАСТИЯ 100% ПО ОКОНЧАНИЮ СРОКА ПЛАНА 1-4 ДНЯ. <br>РЕИНВЕСТИРОВАНИЕ/ВЫВОД МОМЕНТАЛЬНО.</br>ВСЕМ УДАЧИ В <b style="font-size: 23pt">4</b>U ГДЕ МОЖНО ТОЛЬКО ВЫИГРАТЬ!</p></div></div><section class="bgcity"><div class="bgimg-2" id="baunti"><div class="caption"><span class="border"style="background-color:transparent;font-size:25px;color: #f7f7f7;">БАУНТИ</span></br><span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">РЕФБЕК</span></div></div></section><!--  <section class="baunti table-section section" id="baunti"><div class="header-section"><header><h2>ПРОГРАММА "БАУНТИ"</h2></header></div>   </section>  --><div style="position:relative;"><div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;font-size:1.2em"><p>Благодаря <b>Баунти</b> Вы можете вернуть 10% от суммы участия игрока сразу после розыгрыша в <br>проекте <b>4U</b> по РЕФБЕК ссылке. <br>Вам может показаться, что эти 10% погоды не сделают, спешу вас заверить – на <br>дистанции очень даже сделают. Например, от 100 000 <b>Р</b> вклада вы получаете 10 000 <b>Р </b>возврата. <br>Ваша личная <b>Баунти</b> (РЕФБЕК) ссылка доступна в личном кабинете. Начисление средств <br>Производится в течение 1 часа. <br>Реинвестирование/вывод моментальны. <br>Устрой себе и близким ПРАЗДНИКИ!</p></div></div><section class="bgcity"><div class="bgimg-3"><div class="caption"><span class="border"> ОТ 7% ДО 300% ПРИБЫЛИ</span></div></div></section><!--<section class="secrvices table-section section section-color2" id="services">    --><div style="width:100%"><div style="width:70%;margin: 0 auto;"><div class="ver-mi"><header><h3>СТРАТЕГИЯ РАЗВИТИЯ И УСЛОВИЯ <b>4U</b></h3></header></div><div class="ver-mi middle"><!--  <div class="col-md-10 col-md-offset-0"> --><div class="col-md-offset-0" style="text-transform: uppercase; text-size:1.2em; line-height: 1.5;"><p>      </br>От 7%-1 день до 300%-4 дня прибыли <br>Выигрыш зачисляется ежедневно равными долями <br>1, 2, 3, 4 дня - рандом система определяет выигрыш и срок выплаты.<br>(Выигрыш и срок выплаты - далее именуются План) <br>В конце вашего плана возвращается CashBack - 100% - то есть, разыгрываемая сумма <br>Возвращается вам в полном объеме <br>Напоминаем, сам выигрыш начисляется ежедневно <br>Реинвестирование/вывод средств производится в любое удобное для вас время. <br>Минимальный розыгрыш - <b>100 Р</b>, Максимальный розыгрыш - <b> 100 000 Р </b> <br><br></p><p></p></div></div></div></div><!-- </section>    --><!-- <section class="form-to table-section section" id="form-to"> --><section class="bgcity" id="form-to"><div class="bgimg-4"><!--  <span class="border">принять участие</span>   --><div class="form-wrap ver-mi overflow-hidden"><?php if (_uid()){?><!--    --><span class="room"><i class="fa fa-sign-in" aria-hidden="true"></i></span><ul class="caption depo_btn gold"><?php echo $_smarty_tpl->getSubTemplate ('links.el.topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'cabinet','text'=>'Личный кабинет'), 0);?>
</ul><?php }else{ ?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/register/register'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2){?><?php echo "!!";?><?php }?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']){?><?php echo " <<укажите e-mail>>";?><?php }?><?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'udp/rules'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'register_frm1','fields'=>array('aName'=>array('T','Ваше имя',array('name_empty'=>'укажите имя'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseName']!=1)),'uLogin'=>array('T','Придумайте логин!!',array('login_empty'=>'укажите логин','login_short'=>"логин слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinLogin'])."]",'login_wrong'=>'неверный формат логина','login_used'=>'логин уже используется'),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'comment'=>' <span id="login_check" class="err"></span>'),'uMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegConfirm'],'e-mail!! <<будет выслано подтверждение>>','e-mail!!'),array('mail_empty'=>'укажите e-mail','mail_wrong'=>'неверный e-mail','mail_used'=>'e-mail уже используется'),'comment'=>' <span id="mail_check" class="err"></span>'),'uPass'=>array('*','Придумайте пароль!!',array('pass_empty'=>'укажите пароль','pass_short'=>"пароль слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinPass'])."]",'pass_wrong'=>'пароль не соответствует формату')),'Pass2'=>array('*','Повторите пароль!!',array('pass_not_equal'=>'пароли не совпадают')),'aTel'=>array('T','Номер телефона!! <<с кодом страны>>',array('tel_wrong'=>'неверный номер'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['SMS_REG']),'uRef'=>array('T',"Вас пригласил".$_tmp2.$_tmp3,array('ref_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value),'ref_not_found'=>($_smarty_tpl->tpl_vars['txt_login']->value)." не найден"),'default'=>$_SESSION['_ref'],'skip'=>(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3)||!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']),'readonly'=>$_smarty_tpl->tpl_vars['valid_ref']->value),'Invite'=>array('T','Код приглашения!!',array('inv_empty'=>'укажите код','inv_not_found'=>'неверный код','inv_used'=>'код уже использован'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']!=3)),'aSQuestion'=>array('T','Контрольный вопрос!!',array('secq_empty'=>'укажите вопрос','secq_short'=>"вопрос слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('T','Контрольный ответ!!',array('seca_empty'=>'укажите ответ','seca_short'=>"ответ слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]",'seqa_equal_secq'=>'ответ не может совпадать с вопросом'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'Agree'=>array('CC',"Регистрируясь игрок принимает: <a href=\"".$_tmp4."\" target=\"_blank\">правила, соглашение о задатке и политику конфиденциальности</a> !! ",array('must_agree'=>'вы должны принять правила'))),'errors'=>array('multi_reg'=>'множественная регистрация запрещена'),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_RegCaptcha'],'btn_text'=>'ПРИНЯТЬ УЧАСТИЕ'), 0);?>
<?php }?></div></div></section><section class="table-section section section-color2"><div class="ver-mi"><header><h3 style="color:#777">ОБРАТНАЯ СВЯЗЬ</h3></header></div></section><section class="table-section section section-color2" style="background-color: #282E34;color: #fff;max-height:300px"id="contact"><div class="container"><div class="col-md-10 col-md-offset-1"><div class="ver-mi"><header><h3 class="white">ПОДДЕРЖКА</h3></header></div><div class="row boots"><div class="col-md-6"><div class="bot_img"></div></div><div class="col-md-6"><div class="bot_time_img"></div></div></div><div class="row contacts-wrap" style="margin-top: 35px;"><div class="col-md-6"><div class="vkontakte"><div id="vk_groups"></div><script src="https://vk.com/js/api/openapi.js?150" type="text/javascript"></script><script type="text/javascript">
                                VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "100%", height: "200"}, 5263034);
                                </script></div></div><div class="col-md-6"><form action="php/newMail.php" method="post" class="mail-form"><div class="col-md-16"><div class="row"><div class="col-sm-6"><input name="firstname" type="text" class="form-control" placeholder="Имя"data-validation="required"></div><div class="col-sm-6"><input name="email" type="text" class="form-control" placeholder="Почта"data-validation="email"></div></div><div class="row"><div class="col-sm-12"><input name="subject" type="text" class="form-control" placeholder="Тема"data-validation="required"></div></div><div class="row"><div class="col-sm-12"><textarea name="body" class="form-control" rows="10" placeholder="Сообщение. . ."data-validation="required"></textarea></div></div><div class="i-am-center"><div class="row"><div class="col-sm-12"><input type="submit" class="btn btn-green contact-button" value="Отправить"></div></div></div></div></form></div></div><div class="row contacts"><div class="col-md-6"><div class="phone"><span>+7 (495) 177-26-54</span><br><b>Мы презвоним в ближайшее время</b></div></div><div class="col-md-6"><div class="email"><span>administrator@2017grand-lottery2018.org</span><br></div></div></div></div></section><!-- Footer --><footer style="background-color: #282E34;color: #fff;" class="footer to" id="footer"><div class="footer-text"><p class="text-footer"><span class="span1">2017grand-lottery2018.org</span> <span class="span2">все права защищены</span>&copy;</p></div><a id="to-top" href="#header" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a></footer><!-- login --><div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content modal-login-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel">Авторизация</h4></div><div class="modal-body table-section text-center"><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Логин'), null, 0);?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/login/login'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.my.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp5,'form'=>'login_frm1','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'login_not_found'=>"неверная пара ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'not_active'=>'e-mail аккаунта не подтвержден','banned'=>"доступ в аккаунт приостановлен до ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'аккаунт заблокирован')),'Pass'=>array('*','Пароль!!',array()),'Remember'=>array('CC','Запомнить',array()),'URL'=>$_smarty_tpl->tpl_vars['url']->value),'btn_text'=>'Войти'), 0);?>
</div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>