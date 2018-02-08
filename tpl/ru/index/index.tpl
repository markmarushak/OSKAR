{strip}
{include file='header.tpl' title='Grand Lottery'}

<style>

.bgimg-1, .bgimg-2 , bgimg-4{
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url(../img/city3.jpg);
  min-height: 100%;
}

.bgimg-2 {
  background-image: url(../assets/img/city3.jpg);
  min-height: 400px;
}

.bgimg-3 {
  background-image: url(../assets/img/city4.jpg);
  min-height: 400px;
}      

.bgimg-4 {
  background-image: url(../assets/img/space.jpg);
  min-height: 400px;
} 

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.descr_req {
  background-color: #111;
  color: #fff;
  
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}



</style>


    <!-- header -->
    <seection class="header table-section white" id="header">
        <div class="top-wrap">
            <div class="container ">
                <div class="row">
                
                    <div class="col-md-10 col-md-offset-1">
                        <nav class="top-menu" id="top-menu">
                            
                            <div class="button_nav_open">
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                            
                            
                            <ul class="horizontal-menu text-right memu-close-768">
                            
                            <div>
                              <a href="https://vk.com/club5263034" id="soc1"></a>
                            </div>
                            
                               <li> <a href="{_link module="faq"}">faq</a></li>
                                 
                                <li><a href="{_link module='udp/rules'}">ПРАВОВЫЕ ДОКУМЕНТЫ</a></li>
                                                       

                                <li class="ancor closes-menu"><a href="#baunti">баунти</a></li>
                                <li class="ancor closes-menu"><a href="#contact">контакты</a></li>

                                {if _uid()}
                                    {include file='links.el.topmenu.tpl' module='cabinet' text="личный кабинет"}
                                    {if $curr1}
                                        {*{include file='links.element.tpl' module='balance' text='Баланс'}*}
                                        {_z($curr1.wBal, $curr1.cID, 2)}
                                    {/if}
                                    {include file='links.el.topmenu.tpl' module='account/login' params='out' text='Выход'}
                                {else}
                                   <li> <a data-toggle="modal" data-target="#login">вход</a></li>
                                {/if}
                                <div id="google_translate_element"></div>
                                <script type="text/javascript">
                                    {literal}
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'my', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                    }
                                    {/literal}
                                </script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                </form>

                            </ul>   
                              
                        </nav>
                    </div>            
                    
                </div>
                
            </div>
            
        </div>

        <div class="vertical-middle main-text">
            <div class="item-text">
                <h1>Лотерея <b style="font-size:56pt">4</b>U </h1>
                <h1>CASHBACK - 100%</h1>
            </div>
            
            
            
            <div class="item-button-top to">    
           
                 <a href="#form-to"> принять участие</a> 
            
        </div>       </div>
    </seection>
   <!-- <section class="secrvices table-section section section-color2" id="about">    </section>  -->
        <div style="background-color:white;text-align:center;padding:50px 80px;font-size:1.2em">
  <!-- <h3 style="text-align:center;">Лотерея</h3>  </br>  -->
  <p> Это вам не рулетка, которую невозможно обыграть и не игра в наперсток, где <br>
  предугадать что-либо почти не возможно. <br>
  Все что вам нужно сделать, это принять участие. <br>
  Система РАНДОМНО выберет на какой длины план: 1-4 дня - упадет Ваш депозит  и <br>
  сколько Вы получите прибыли от 7%-1 день до 300%-4 дня.  </br>
      <br>
АКЦИЯ: ТОЛЬКО НОВОГОДНИЕ ПРАЗДНИКИ! С 26 ДЕКАБРЯ ПО 30 ЯНВАРЯ РАБОТАЕТ СИСТЕМА <br>
<b> CASH BACK - 100%</b> , ЭТО ВОЗВРАТ СУММЫ УЧАСТИЯ  100% ПО ОКОНЧАНИЮ СРОКА ПЛАНА 1-4 ДНЯ. <br>
                    РЕИНВЕСТИРОВАНИЕ/ВЫВОД МОМЕНТАЛЬНО.</br>
                    ВСЕМ УДАЧИ В <b style="font-size: 23pt">4</b>U ГДЕ МОЖНО ТОЛЬКО ВЫИГРАТЬ!</p>
</div>

        </div>
        
    
    
    <section class="bgcity">
             <div class="bgimg-2" id="baunti">
            <div class="caption" >
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">БАУНТИ</span></br>
              <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">РЕФБЕК</span>
            </div>
          </div>

    </section>
    
   
       <!--  <section class="baunti table-section section" id="baunti"><div class="header-section">
            <header>
                <h2>ПРОГРАММА "БАУНТИ"</h2>
            </header>
        </div>   </section>  -->
       
        <div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;font-size:1.2em">
    <p>  
    Благодаря <b>Баунти</b> Вы можете вернуть 10% от суммы участия игрока сразу после розыгрыша в <br>
    проекте <b>4U</b> по РЕФБЕК ссылке.        <br>
     Вам может показаться, что эти 10% погоды не сделают, спешу вас заверить – на <br>
      дистанции очень даже сделают. Например, от 100 000 <b>Р</b> вклада вы получаете 10 000 <b>Р </b> 
       возврата.           <br>
      Ваша личная <b>Баунти</b> (РЕФБЕК) ссылка доступна в личном кабинете. Начисление средств <br>
      Производится в течение 1 часа. <br>
      Реинвестирование/вывод моментальны. <br>
      
      Устрой себе и близким Новый год!
   </p>
  </div>
</div>

    
                      
    
    <section class="bgcity">
             <div class="bgimg-3">
            <div class="caption">
    <span class="border"> ОТ 7% ДО 300% ПРИБЫЛИ</span>
  </div>
      </div>

    </section>

    <!--<section class="secrvices table-section section section-color2" id="services">    -->
    <div style="width:100%">
    <div style="width:70%; 
  margin: 0 auto;">
        <div class="ver-mi">
            <header>
                <h3>СТРАТЕГИЯ РАЗВИТИЯ И УСЛОВИЯ <b>4U</b></h3>
            </header>
        </div>
        <div class="ver-mi middle">
        <!--  <div class="col-md-10 col-md-offset-0"> -->
            <div class="col-md-offset-0" style = "text-transform: uppercase; text-size:1.2em; line-height: 1.5;">
                <p>      </br>
                    От 7%-1 день до 300%-4 дня прибыли   <br>
                    Выигрыш зачисляется ежедневно равными долями <br>              
                    1, 2, 3, 4 дня - рандом система определяет выигрыш и срок выплаты.<br>
                    (Выигрыш и срок выплаты - далее именуются План) <br>
                     В конце вашего плана возвращается CashBack - 100% - то есть, разыгрываемая сумма <br>
                     Возвращается вам в полном объеме <br>
                     Напоминаем, сам выигрыш начисляется ежедневно <br>
                     Реинвестирование/вывод средств производится в любое удобное для вас время. <br>
                     Минимальный розыгрыш - <b>100 Р</b>, Максимальный розыгрыш - <b> 100 000 Р </b> <br>
                <br>
                </p>
                <p></p>
            </div>
        </div>
        </div>
        </div>
        
   <!-- </section>    -->
           
   <!-- <section class="form-to table-section section" id="form-to"> -->
     <section class="bgcity" id="form-to">
             <div class="bgimg-4">
            
  <!--  <span class="border">принять участие</span>   -->    
                                               
        <div class="form-wrap ver-mi overflow-hidden">

        {if _uid()}
        
           <!--    -->
         
           <span class="room"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                       <ul class="caption depo_btn gold">
            
                {include file='links.el.topmenu.tpl' module='cabinet' text='Личный кабинет'}
                
            </ul>
            
             
        {else}

            {include file='edit.my.tpl'
            url="{_link module='account/register/register'}"
            form='register_frm1'
            fields=
            [
            'aName'=>
            [
            'T',
            'Ваше имя',
            [
            'name_empty'=>'укажите имя'
            ],
            'skip'=>($_cfg.Account_UseName != 1)
            ],
            'uLogin'=>
            [
            'T',
            'Придумайте логин!!',
            [
            'login_empty'=>'укажите логин',
            'login_short'=>"логин слишком короткий [не менее {$_cfg.Account_MinLogin}]",
            'login_wrong'=>'неверный формат логина',
            'login_used'=>'логин уже используется'
            ],
            'skip'=>$_cfg.Const_NoLogins,
            'comment'=>' <span id="login_check" class="err"></span>'
            ],
            'uMail'=>
            [
            'T',
            valueIf($_cfg.Account_RegConfirm, 'e-mail!! <<будет выслано подтверждение>>', 'e-mail!!'),
            [
            'mail_empty'=>'укажите e-mail',
            'mail_wrong'=>'неверный e-mail',
            'mail_used'=>'e-mail уже используется'
            ],
            'comment'=>' <span id="mail_check" class="err"></span>'
            ],
            'uPass'=>
            [
            '*',
            'Придумайте пароль!!',
            [
            'pass_empty'=>'укажите пароль',
            'pass_short'=>"пароль слишком короткий [не менее {$_cfg.Account_MinPass}]",
            'pass_wrong'=>'пароль не соответствует формату'
            ]
            ],
            'Pass2'=>
            [
            '*',
            'Повторите пароль!!',
            [
            'pass_not_equal'=>'пароли не совпадают'
            ]
            ],
            'aTel'=>
            [
            'T',
            'Номер телефона!! <<с кодом страны>>',
            [
            'tel_wrong'=>'неверный номер'
            ],
            'skip'=>!$_cfg.SMS_REG
            ],
            'uRef'=>
            [
            'T',
            "Вас пригласил{if $_cfg.Account_RegMode == 2}!!{/if}{if $_cfg.Const_NoLogins} <<укажите e-mail>>{/if}",
            [
            'ref_empty'=>"укажите $txt_login",
            'ref_not_found'=>"$txt_login не найден"
            ],
            'default'=>$smarty.session._ref,
            'skip'=>(($_cfg.Account_RegMode == 3) or !$_cfg.Ref_Word),
            'readonly'=>$valid_ref
            ],
            'Invite'=>
            [
            'T',
            'Код приглашения!!',
            [
            'inv_empty'=>'укажите код',
            'inv_not_found'=>'неверный код',
            'inv_used'=>'код уже использован'
            ],
            'skip'=>($_cfg.Account_RegMode != 3)
            ],
            'aSQuestion'=>
            [
            'T',
            'Контрольный вопрос!!',
            [
            'secq_empty'=>'укажите вопрос',
            'secq_short'=>"вопрос слишком короткий [не менее {$_cfg.Sec_MinSQA}]"
            ],
            'skip'=>($_cfg.Sec_MinSQA == 0),
            'size'=>40
            ],
            'aSAnswer'=>
            [
            'T',
            'Контрольный ответ!!',
            [
            'seca_empty'=>'укажите ответ',
            'seca_short'=>"ответ слишком короткий [не менее {$_cfg.Sec_MinSQA}]",
            'seqa_equal_secq'=>'ответ не может совпадать с вопросом'
            ],
            'skip'=>($_cfg.Sec_MinSQA == 0),
            'size'=>40
            ],
            'Agree'=>
            [
            'CC',
            "Регистрируясь игрок принимает: <a href=\"{_link module='udp/rules'}\" target=\"_blank\">правила, соглашение о задатке и политику конфиденциальности</a> !! ",
            [
            'must_agree'=>'вы должны принять правила'
            ]
            ]
            ]
            errors=['multi_reg'=>'множественная регистрация запрещена']
            captcha=$_cfg.Account_RegCaptcha
            btn_text='ПРИНЯТЬ УЧАСТИЕ'
            }

            {/if}
        </div> 
        </div>
    </section>


    <section class="table-section section section-color2">
                    <div class="ver-mi">
            <header>
                <h3 style="color:#777">ОБРАТНАЯ СВЯЗЬ</h3>
            </header>
        </div>
                		<form action="php/newMail.php" method="post" class="mail-form" style="position:absolute; top:50%;left:40%;margin:-120px 0 0 -100px;min-height:100px; max-width:100%; z-index:9999;">
				<div class="col-md-16">
					<div class="row">
						<div class="col-sm-6">
							<input name="firstname" type="text" class="form-control" placeholder="Имя" data-validation="required">
						</div>
						<div class="col-sm-6">
							<input name="email" type="text" class="form-control" placeholder="Почта" data-validation="email">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input name="subject" type="text" class="form-control" placeholder="Тема" data-validation="required">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<textarea name="body" class="form-control" rows="10" placeholder="Сообщение. . ." data-validation="required"></textarea>
						</div>
					</div>
          <div class="i-am-center" style="margin: auto; max-width: 100px;">
					<div class="row">
						<div class="col-sm-12">
							<input type="submit" class="btn btn-green contact-button" value="Отправить">
						</div>
					</div>
          </div>
				</div>
        </div>
			</form>
    </section>

    <section class="table-section section section-color2" style="background-color: #282E34;color: #fff;max-height:300px" id="contact">
    
    
    
    
    
      <!--  <div class="header-section">
            <header>
                <h2>наши партнеры</h2>
            </header>
        </div>
        <div class="vertical-middle middle">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            {*<nav id="contact-paysys">*}
                                {*<ul>*}
                                    {*<li></li>*}
                                    {*<li></li>*}
                                    {*<li></li>*}
                                    {*<li></li>*}
                                    {*<br>*}
                                    {*<li></li>*}
                                    {*<li></li>*}
                                    {*<li></li>*}
                                    {*<li></li>*}
                                    {*<li></li>*}
                                {*</ul>*}
                            {*</nav>*}
                            <div class="owl-carousel">
                                <div>
                                    <sapn class="bissnes_part_1 bissnes_part"></sapn>
                                </div>
                                <div>
                                    <sapn class="bissnes_part_2 bissnes_part"></sapn>
                                </div>
                                <div>
                                    <sapn class="bissnes_part_3 bissnes_part"></sapn>
                                </div>
                                <div>
                                    <sapn class="bissnes_part_4 bissnes_part"></sapn>
                                </div>
                                <div>
                                    <sapn class="bissnes_part_5 bissnes_part"></sapn>
                                </div>
                                <div>
                                    <sapn class="bissnes_part_6 bissnes_part"></sapn>
                                </div>
                                <div>
                                    <sapn class="bissnes_part_7 bissnes_part"></sapn>
                                </div>
                                <div>
                                    <sapn class="bissnes_part_8 bissnes_part"></sapn>
                                </div>
                            </div>
                        </div>    
                        -->
                        <div class="col-md-10 col-md-offset-1">
                        <div class="ver-mi">
            <header>
                <h3 style="color: #fff">НАШИ КОНТАКТЫ</h3>
            </header>
        </div>
                       <!--     <h3 class="text-top_contact" style="color: #fff">наши контакты</h3> -->
                            <div class="row contacts-wrap" style = "margin-top: 35px;">  
                            <div class="col-md-8">
                            <div class="vkontakte">
                                <div id="vk_groups"></div>

                                {literal}
                                    <script src="https://vk.com/js/api/openapi.js?150" type="text/javascript"></script>

                                    <script type="text/javascript">
                                        VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "500", height: "200"}, 5263034);
                                    </script>
                                {/literal}
                            </div>
                        </div>
                                
                            
                                <ul class="text-left">
                                    <li style="list-style-type: none; margin: 1em 0">
                                    
                                        <p>E-mail:</p>     
                                        <span>administrator@2017grand-lottery2018.org</span><br></li>
                                    <li style="list-style-type: none;">
                                        <p>Телефон:</p>
                                        <span>+7 (495) 177-26-54</span></li>
                                </ul>
                            
                       <!-- <div class="col-md-4">
                            
                        </div>    -->
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer  style="background-color: #282E34;color: #fff;"  class="footer to" id="footer">
        
        <div class="footer-text">
            <p class="text-footer"><span class="span1">2017grand-lottery2018.org</span> <span class="span2">все права защищены</span> &copy;</p>
        </div>
        <a id="to-top" href="#header" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>


    <!-- login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-login-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Авторизация</h4>
                </div>
                <div class="modal-body table-section text-center">
                    {$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'Логин')}
                    {include file='edit.my.tpl'
                    url="{_link module='account/login/login'}"
                    form='login_frm1'
                    fields=
                    [
                    'Login'=>
                    [
                    'T',
                    "$txt_login!!",
                    [
                    'login_empty'=>"укажите $txt_login/Пароль",
                    'login_not_found'=>"неверная пара $txt_login/Пароль",
                    'not_active'=>'e-mail аккаунта не подтвержден',
                    'banned'=>"доступ в аккаунт приостановлен до $ban_date",
                    'blocked'=>'аккаунт заблокирован'
                    ]
                    ],
                    'Pass'=>
                    [
                    '*',
                    'Пароль!!',
                    [
                    ]
                    ],
                    'Remember'=>
                    [
                    'CC',
                    'Запомнить',
                    [
                    ]
                    ],
                    'URL'=>
                    $url
                    ]
                    btn_text='Войти'
                    }
                </div>

            </div>
        </div>
    </div>




{include file='footer.tpl'}
{/strip}