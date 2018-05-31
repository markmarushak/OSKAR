{strip}
    {include file='header.tpl' title='Grand Lottery'}
    <link rel="stylesheet" href="">
    <style>
        .name_logo-h3 {
            display: inline-block;
            position: relative;
        }
        span.name_logo {
            font-size: 25px;
            font-weight: bold;
            color: #2196F3;
            background: #0002;
            padding: 0 0 0 5px;
            text-transform: uppercase;
            letter-spacing: -1px;
        }
        span.in_curr {
            font-size: 25px;
            color: gold;
        }
		.header_logo_4u {
			font-size: 56pt;
			background: rgba(0,0,0, 0.58);
			color: #2196F3;
			border-radius: 10px;
			padding: 0 12px;
		}
		.header_logo_R {
			font-size: 45px;
			text-shadow: 0px 0px 0 rgb(232,232,232), 1px -1px 0 rgb(209,209,209), 2px -2px 0 rgb(185,185,185), 3px -3px 0 rgb(162,162,162), 4px -4px 0 rgb(139,139,139), 5px -5px 0 rgb(116,116,116), 6px -6px 0 rgb(93,93,93);
			transform: rotate3d(1,1,1,5deg);
			position: relative;
		    display: inline-block;
		    padding: 10px;
		    z-index: 1;
		}
		.header_logo_R::after {
			content: '';
			display: block;
			position: absolute;
			top: 8px;
			left: 3px;
			width: 90%;
			height: 70%;
			background: rgba(255, 215, 0, 0.9);
			border-radius: 50%;
			padding: 0;
			z-index: -1;
		}
        .bgimg-1, .bgimg-2, bgimg-4 {
            position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .item-text div,
        .item-text div > h3 
        {
			font-size: 25px;
			font-weight: bold;
			color: #fff;
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
                                    <a href="https://vk.com/club5263034" id="soc1" target="_blank"></a>
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
                <h1><b class='header_logo_4u' style="font-size:56pt">4U</b> Забава</h1>
				<div><p>КЭШБЭК - 100%</p></div>
				<div><h3>На Валюте <b class='header_logo_R'>R</b></h3></div>
            </div>


            <div class="item-button-top to">

                <a href="#form-to"> принять участие</a>

            </div>
        </div>
    </seection>
    <div class="section-1 home">

    </div>

    <section class="services " id="services">
        <div class="services-block">
            <div class="col-md-offset-0">
                <p>
                    УВОЖАЕМЫЕ ИГРОКИ!  ИГРА ПРОИСХОДИТ НА ВНУТРЕННЮЮ ВАЛЮТУ  <span class="in_curr"><i class="far fa-registered"></i></span>. <br>
                    <b><span class="in_curr">1<i class="far fa-registered"></i></span></b> ИМЕЕТ ЦЕННОСТЬ 1 РОССИЙСКИЙ РУБЛЬ ПО КУРСУ ЦБ РФ. <br>

                    ПОКУПКА  ПРОДАЖА <span class="in_curr"><i class="far fa-registered"></i></span>  ПРОИСХОДИТ АВТОМАТИЧЕСКИ, по курсу один к одному  <span class="in_curr">1<i class="far fa-registered"></i>  - 1 РУБЛЬ РФ.</span> <br>

                    ДЛЯ ИГРОКА ДАНННАЯ ОПЕРАЦИЯ НИ ЗАМЕТНА, ПРОИСХОДИТ МГНОВЕННО  В АВТОМАТИЧЕСКОМ РЕЖИМЕ . <br>
                    ЗАЧИСЛЕНИЕ И ВЫВОД СРЕДСТВ ИГРОКОВ ОСУЩЕСТВЛЯЕТСЯ В ЭЛЕКТОННОЙ ВАЛЮТЕ.
                </p>
            </div>
        </div>
    </section>

    <section class="bgcity">
        <div class="bgimg-2" id="baunti">
            <div class="caption">
                <span class="border"
                      style="background-color:transparent;font-size:25px;color: #f7f7f7;">БАУНТИ</span>
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
                Благодаря <b>Баунти</b> Вы можете вернуть 10% <span class="in_curr"><i class="far fa-registered"></i></span> от 1-ой игры по Вашей РЕФ-БЕК ссылке. В игре <span class="name_logo">4u</span><br>
                <br>
                Вам может показаться, что эти 10% погоды не сделают, факт – на <br>
                дистанции очень даже сделают.
				<br>
                 Например, от 100 000<span class="in_curr"><i class="far fa-registered"></i></span> вклада вы получаете 10 000<span class="in_curr"><i class="far fa-registered"></i></span> возврата.<br>
                Ваша личная <b>Баунти</b> (РЕФБЕК) ссылка доступна в личном кабинете.
				<br>
                 Начисление <span class="in_curr"><i class="far fa-registered"></i></span> производится в течение 1 часа. <br>
                Реинвестирование/вывод моментальны. <br>

                Устрой себе и близким ПРАЗДНИКИ c <span class="name_logo">4u</span>
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
                    <h3>ПРАВИЛА ИГРЫ НА <span class="name_logo">4u</span></h3>
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
                        В конце вашего плана возвращается CashBack - <span class="in_curr">100% </span> - то есть, разыгрываемая сумма <br>
                        Возвращается вам в полном объеме <br>
                        Напоминаем, сам выигрыш начисляется ежедневно <br>
                        Реинвестирование/вывод средств производится в любое удобное для вас время. <br>
                        Минимальный розыгрыш - <b>100<span class="in_curr"><i class="far fa-registered"></i></span></b>, Максимальный розыгрыш - <b> 100 000<span class="in_curr"><i class="far fa-registered"></i></span></b> <br>
                        <br>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- </section>    -->

    <section class="services " id="services">
        <div class="services-block">
            <div class="col-md-offset-0">
                <p>
                    УВОЖАЕМЫЕ ИГРОКИ!  ИГРА ПРОИСХОДИТ НА ВНУТРЕННЮЮ ВАЛЮТУ  <span class="in_curr"><i class="far fa-registered"></i></span>. <br>
                    <b><span class="in_curr">1<i class="far fa-registered"></i></span></b> ИМЕЕТ ЦЕННОСТЬ 1 РОССИЙСКИЙ РУБЛЬ ПО КУРСУ ЦБ РФ. <br>

                    ПОКУПКА  ПРОДАЖА <span class="in_curr"><i class="far fa-registered"></i></span>  ПРОИСХОДИТ АВТОМАТИЧЕСКИ, по курсу один к одному  <span class="in_curr">1<i class="far fa-registered"></i>  - 1 РУБЛЬ РФ.</span> <br>

                    ДЛЯ ИГРОКА ДАНННАЯ ОПЕРАЦИЯ НИ ЗАМЕТНА, ПРОИСХОДИТ МГНОВЕННО  В АВТОМАТИЧЕСКОМ РЕЖИМЕ . <br>
                    ЗАЧИСЛЕНИЕ И ВЫВОД СРЕДСТВ ИГРОКОВ ОСУЩЕСТВЛЯЕТСЯ В ЭЛЕКТОННОЙ ВАЛЮТЕ.
                </p>
            </div>
        </div>
    </section>

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
                        <div class="form-group col-md-10 col-md-push-1">
                        	<label class="col-sm-4 control-label text-right" for="register_frm1_uLogin">
                        		<span class="descr_req">Придумайте логин<span class="descr_star">*</span></span>
                        	</label>
                            <div class="col-sm-6"><input name="uLogin" id="register_frm1_uLogin" value="" size="20"
                                                         type="text" class="form-control string_small"> <span
                                        id="login_check" class="err"></span></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1">
                        	<label class="col-sm-4 control-label text-right" for="register_frm1_uMail">
                        		<span class="descr_req">e-mail<span class="descr_star">*</span></span>
                        	</label>
                            <div class="col-sm-6"><input name="uMail" id="register_frm1_uMail" value="" size="20"
                                                         type="text" class="form-control string_small"> <span
                                        id="mail_check" class="err"></span></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1">
                        	<label class="col-sm-4 control-label text-right" for="register_frm1_uPass">
                        		<span class="descr_req">Придумайте пароль<span class="descr_star">*</span></span>
                        	</label>
                            <div class="col-sm-6"><input name="uPass" id="register_frm1_uPass" value="" size="20"
                                                         type="password" class="form-control password"></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1">
                        	<label class="col-sm-4 control-label text-right" for="register_frm1_Pass2">
                        		<span class="descr_req">Повторите пароль<span class="descr_star">*</span></span>
                        	</label>
                            <div class="col-sm-6"><input name="Pass2" id="register_frm1_Pass2" value="" size="20"
                                                         type="password" class="form-control password"></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1">
                        	<label class="col-sm-4 control-label text-right" for="register_frm1_uRef">
                        		<span class="descr_req">Вас пригласил</span>
                        	</label>
                            <div class="col-sm-6"><input name="uRef" id="register_frm1_uRef" value="" size="20"
                                                         type="text" class="form-control string_small"></div>
                        </div>
                        <div class="form-group col-md-10 col-md-push-1">
                        	<label class="col-sm-4 control-label text-right" for="register_frm1_Agree">
                        		<span class="descr_req">Регистрируясь игрок принимает: <a href="rules"
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
                    <div class="helper_head"><i class="fab fa-telegram-plane"></i></div>
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