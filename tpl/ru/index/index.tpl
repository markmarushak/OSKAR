{strip}
    {include file='header.tpl' title='Grand Lottery'}
    <link rel="stylesheet" href="">
    <style>

        .bgimg-1, .bgimg-2, bgimg-4 {
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

        .section-1 {
            background-color: white;
            text-align: center;
            padding: 50px 80px;
            font-size: 1.2em;
        }

        .conditions {
            width: 70%;
            margin: 0 auto;
        }

    </style>
    <!-- header -->
    <seection class="header table-section white" id="header">

        <div class="top-wrap" id="top-wrap">
            <div class="container ">
                <div class="row">

                    <div class="col-md-10 col-md-offset-1">
                        <nav class="top-menu" id="top-menu">

                            <div class="button_nav_open">
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>


                            <ul class="horizontal-menu text-right memu-close-768">

                                <div class="vk_group-logo">
                                    <a href="https://vk.com/club5263034" id="soc1"></a>
                                </div>

                                <li><a href="{_link module="faq"}">faq</a></li>

                                <li><a href="{_link module='udp/rules'}">ПРАВОВЫЕ ДОКУМЕНТЫ</a></li>


                                <li class="ancor closes-menu"><a href="#baunti">баунти</a></li>
                                <li class="ancor closes-menu"><a href="#contact">поддержка</a></li>

                                {if _uid()}
                                    {include file='links.el.topmenu.tpl' module='cabinet' text="личный кабинет"}
                                    {if $curr1}
                                        {*{include file='links.element.tpl' module='balance' text='Баланс'}*}
                                        {_z($curr1.wBal, $curr1.cID, 2)}
                                    {/if}
                                    {include file='links.el.topmenu.tpl' module='account/login' params='out' text='Выход'}
                                {else}
                                    <li><a data-toggle="modal" data-target="#login">вход</a></li>
                                {/if}

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

            </div>
        </div>
    </seection>
    <!-- <section class="secrvices table-section section section-color2" id="about">    </section>  -->
    <div class="section-1">
        <!-- <h3 style="text-align:center;">Лотерея</h3>  </br>  -->
        <p> Это вам не рулетка, которую невозможно обыграть и не игра в наперсток, где <br>
            предугадать что-либо почти не возможно. <br>
            Все что вам нужно сделать, это принять участие. <br>
            Система РАНДОМНО выберет на какой длины план: 1-4 дня - упадет Ваш депозит и <br>
            сколько Вы получите прибыли от 7%-1 день до 300%-4 дня.  </br>
            <br>
            АКЦИЯ: ТОЛЬКО ПРАЗДНИКИ! С 26 ДЕКАБРЯ ПО 25 ФЕВРАЛЯ РАБОТАЕТ СИСТЕМА <br>
            <b> CASH BACK - 100%</b> , ЭТО ВОЗВРАТ СУММЫ УЧАСТИЯ 100% ПО ОКОНЧАНИЮ СРОКА ПЛАНА 1-4 ДНЯ. <br>
            РЕИНВЕСТИРОВАНИЕ/ВЫВОД МОМЕНТАЛЬНО.</br>
            ВСЕМ УДАЧИ В <b style="font-size: 23pt">4</b>U ГДЕ МОЖНО ТОЛЬКО ВЫИГРАТЬ!</p>
        <div class="col-md-12">
            <div class="vkontakte"><a href="https://vk.com/club5263034">подпишитесь на нашу группу</a></div>
        </div>
    </div>
    <p></p>
    </div>
    <section class="bgcity">
        <div class="bgimg-2" id="baunti">
            <div class="caption">
                <span class="border"
                      style="background-color:transparent;font-size:25px;color: #f7f7f7;">БАУНТИ</span></br>
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
        <div class="section-1" style="color:#ddd;background-color:#282E34">
            <p>
                Благодаря <b>Баунти</b> Вы можете вернуть 10% от суммы участия игрока сразу после розыгрыша в <br>
                проекте <b>4U</b> по РЕФБЕК ссылке. <br>
                Вам может показаться, что эти 10% погоды не сделают, спешу вас заверить – на <br>
                дистанции очень даже сделают. Например, от 100 000 <b>Р</b> вклада вы получаете 10 000 <b>Р </b>
                возврата. <br>
                Ваша личная <b>Баунти</b> (РЕФБЕК) ссылка доступна в личном кабинете. Начисление средств <br>
                Производится в течение 1 часа. <br>
                Реинвестирование/вывод моментальны. <br>

                Устрой себе и близким ПРАЗДНИКИ!
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
        <div class="conditions">
            <div class="ver-mi">
                <header>
                    <h3>СТРАТЕГИЯ РАЗВИТИЯ И УСЛОВИЯ <b>4U</b></h3>
                </header>
            </div>
            <div class="ver-mi middle">
                <!--  <div class="col-md-10 col-md-offset-0"> -->
                <div class="col-md-offset-0" style="text-transform: uppercase; text-size:1.2em; line-height: 1.5;">
                    <p>      </br>
                        От 7%-1 день до 300%-4 дня прибыли <br>
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
                    <span class="room"><i class="fab fa-accusoft" aria-hidden="true"></i></span>
                    <ul class="caption depo_btn gold">

                        {include file='links.el.topmenu.tpl' module='cabinet' text='Личный кабинет'}

                    </ul>
                {else}
                    <form class="form-horizontal" role="form" method="post"
                          action="{_link module='account/register/register'}" name="register_frm1">
                        <div class="form-group col-md-10 col-md-push-1"><label class="col-sm-4 control-label text-right"
                                                                               for="register_frm1_uLogin"><span
                                        class="descr_req">Придумайте логин<span
                                            class="descr_star">*</span></span></label>
                            <div class="col-sm-6"><input name="uLogin" id="register_frm1_uLogin" value="" size="20"
                                                         type="text" class="form-control string_small"> <span
                                        id="login_check" class="err"></span></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1"><label class="col-sm-4 control-label text-right"
                                                                               for="register_frm1_uMail"><span
                                        class="descr_req">e-mail<span class="descr_star">*</span></span></label>
                            <div class="col-sm-6"><input name="uMail" id="register_frm1_uMail" value="" size="20"
                                                         type="text" class="form-control string_small"> <span
                                        id="mail_check" class="err"></span></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1"><label class="col-sm-4 control-label text-right"
                                                                               for="register_frm1_uPass"><span
                                        class="descr_req">Придумайте пароль<span
                                            class="descr_star">*</span></span></label>
                            <div class="col-sm-6"><input name="uPass" id="register_frm1_uPass" value="" size="20"
                                                         type="password" class="form-control password"></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1"><label class="col-sm-4 control-label text-right"
                                                                               for="register_frm1_Pass2"><span
                                        class="descr_req">Повторите пароль<span
                                            class="descr_star">*</span></span></label>
                            <div class="col-sm-6"><input name="Pass2" id="register_frm1_Pass2" value="" size="20"
                                                         type="password" class="form-control password"></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1"><label class="col-sm-4 control-label text-right"
                                                                               for="register_frm1_uRef">Вас
                                пригласил</label>
                            <div class="col-sm-6"><input name="uRef" id="register_frm1_uRef" value="" size="20"
                                                         type="text" class="form-control string_small"></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1"><label class="col-sm-4 control-label text-right"
                                                                               for="register_frm1_Agree"><span
                                        class="descr_req">Регистрируясь игрок принимает: <a href="rules"
                                                                                            target="_blank">правила, соглашение о задатке и политику конфиденциальности</a> <span
                                            class="descr_star">*</span> </span></label>
                            <div class="col-sm-6"><input name="Agree" id="register_frm1_Agree" value="1" type="checkbox"
                                                         class="checkbox">
                            {include file='widget/clock/index.tpl'}
                            </div>
                            <br></div>
                        <div class="footer-section home-form">

                            <div class=" col-md-10 col-md-offset-1 text-center item-button-submit">
                                <button name="register_frm1_btn" value="ПРИНЯТЬ УЧАСТИЕ" type="submit">ПРИНЯТЬ УЧАСТИЕ
                                </button>
                            </div>
                        </div>
                    </form>
                {/if}
            </div>
        </div>
    </section>
    <section class="table-section section section-color2" style="background-color: #282E34;color: #fff;max-height:300px"
             id="contact">

        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="row boots">
                    <h3>Поддержка</h3>
                    <p>24/7 &bull; 365</p>
                </div>
                <div class="row contacts-wrap" style="margin-top: 35px;">

                    <div class="col-md-12">
                        <form action="mailer" method="post" class="mail-form">
                            <div class="form-group double">
                                <div class="col-md-6 col-sm-12">
                                    <input name="firstname" type="text" class="form-control" placeholder="Имя"
                                           data-validation="required" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input name="email" type="text" class="form-control" placeholder="Почта"
                                           data-validation="email" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" placeholder="Тема"
                                       data-validation="required" required>
                            </div>
                            <div class="form-group">
                                <textarea name="body" class="form-control" rows="10" placeholder="Сообщение. . ."
                                          data-validation="required" required></textarea>
                            </div>

                            <input type="submit" class="btn btn-green contact-button" value="Отправить">
                        </form>
                    </div>
                </div>
                <div class="row contacts">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phone">
                            <span>+7 (495) 177-26-54</span>
                            <br>
                            <b>Мы перезвоним Вам в ближайшее время</b>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="email">
                            <span>administrator@2017grand-lottery2018.org</span><br>
                            <b>Мы ответим Вам в ближайшее время</b>

                        </div>
                    </div>
                </div>

            </div>


        </div>

    </section>
    <!-- Footer -->
    <footer style="background-color: #282E34;color: #fff;" class="footer to" id="footer">

        <div class="footer-text">
            <p class="text-footer">
                <span>Компания 4U базируется - FRANCE</span>
                <br>
                <span>4U подчиняется действующему законодательству - FRANCE</span>
                <br>
                <span class="span1">2017grand-lottery2018.org</span> - <span
                        class="span2">все права защищены 2017-2018</span>
                &copy;</p>
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