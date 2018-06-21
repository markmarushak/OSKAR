{strip}
    {include file='header.tpl' title='Правила'}
    <style>
        body {
            background-image: url(http://oboi-na-stol.com/pub/original_images/oboi-na-stol.com-261338-abstrakciya-abstrakciya-fraktal.jpg);
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
        }
        .br-ruls {
            background: rgba(40, 46, 52, 0.8);
            color: #eee;
            border-radius: 20px;
            padding: 10px;
            margin: 10px 0;
            box-shadow: 0 0 2px 1px #0507f5, inset 0 0 2px 1px #0507f5;
        }
        .sect {
            display: none;
        }
        .sect.default {
            margin-top: 5%;
            display: block;
        }
        .memu-close-768 {
            background: #777;
            padding: 5px;
            border-radius: 11px;
            color: #fff;
        }
        .avatar.home img {
            width: 40px;
            height: 40px;
        }

        @media screen and (max-width: 768px){
            .top-wrap {
                margin: 2em 0;
                display: block;
                right: 0;
                top: 20px;
            }
            .top-menu {
                top: 0;
            }
        }

    </style>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-wrap" id="top-wrap">
                    <div class="container ">
                        <div class="row">

                            <div class="col-md-10 col-md-offset-1">
                                <nav class="top-menu" id="top-menu">

                                    <div class="button_nav_open">
                                        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                    </div>


                                    <ul class="horizontal-menu text-right memu-close-768">

                                        <li><a href="/home"><i class="fas fa-home"></i></a></li>
                                        <li><a class="tab default" href="#ruls">Првила игр</a></li>
                                        <li><a class="tab" href="#ruls-2">о внутренней валюте</a></li>

                                        {if _uid()}
                                            {include file='links.el.topmenu.tpl' module='cabinet' text="игровой аккаунт"}
                                            {if $curr1}
                                                {*{include file='links.element.tpl' module='balance' text='Баланс'}*}
                                                {_z($curr1.wBal, $curr1.cID, 2)}
                                            {/if}
                                            {include file='links.el.topmenu.tpl' module='account/login' params='out' text='Выход'}
                                        {else}
                                            {*<li><a data-toggle="modal" data-target="#login">вход</a></li>*}
                                            <li><a href="{_link module="account/login"}">вход</a></li>
                                            <li><a href="{_link module="account/register"}">регистрация</a></li>
                                        {/if}
                                        <div class="avatar home">
                                            <img src="{if $avatar.url_img}{$avatar.url_img}{else}assets/img/player_inco.png{/if}" alt="">
                                        </div>

                                    </ul>

                                </nav>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container sect default" id="ruls">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                <div class="br-ruls animated fadeInLeft">
                    <div class="conditions">
                        <div class="ver-mi">
                            <header>
                                <h3>ПРАВИЛА ИГР НА <span class="name_logo">4u</span></h3>
                            </header>
                        </div>
                        <div class="ver-mi middle">
                            <!--  <div class="col-md-10 col-md-offset-0"> -->
                            <div class="col-md-offset-0" style="text-transform: uppercase; text-size:1.2em; line-height: 1.5;">
                                <p>
                                    ЗАРЕГИСТРИРУЙТЕСЬ НА <span class="name_logo">4u</span> И ПОПОЛНИТЕ БАЛАНС ИГРОВОГО АККАУНТА
                                    <br>
                                    ВЫБЕРИТЕ 1 ИЗ 10 ИГРОВЫХ ТЕМ <a href="/group_menu">список тем</a>
                                    <br>
                                    НАЗНАЧТЕ ЦЕНУ ВОПРОСА  ОТ 100<span class="in_curr"><i class="far fa-registered"></i></span> ДО 100 000<span class="in_curr"><i class="far fa-registered"></i></span> <br>
                                    ПОПАВ В ИГРУ ОТВЕТТЕ ПРАВИЛЬНО НА ПРОСТОЙ ВОПРОС ИЗ 4 ВАРИЙАНТОВ <br>
                                    ВЫБЕРИТЕ СВОЙ КЕЙС<br><br>
                                    <span class="in_curr case"><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i></span>
                                    <br>
                                    В КАЖДОМ КЕЙСЕ НАХОДИТСЯ ОТ <span class="in_curr">7%</span> ДО <span class="in_curr">2000%</span> ОТ НАЗНАЧЕННОЙ СТОИМОСТИ ВАШЕГО ВОПРОСА <br>
                                    ТАК-ЖЕ В КЕЙСЕ ЗАШИФРОВАН СРОК ПОЛУЧЕНИЯ ВЫИГРЫША &bull; ОТ  <span class="in_curr">24</span> ДО <span class="in_curr">96</span> ЧАСОВ &bull; БУДЕТ ЗАЧИСЛЕН НА ИГРОВОЙ АККАУНТ КАЖДЫЕ <span class="in_curr">24</span> ЧАСА РАВНЫМИ ДОЛЯМИ
                                    <br>
                                    СИСТЕМА:<span class="in_curr"> CASH BACK - 100%</span> , ЭТО ВОЗВРАТ СУММЫ УЧАСТИЯ  ПРИ ПОЛУЧЕНИИ ВЫИГРЫША.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container sect" id="ruls-2">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                <section class="services br-ruls animated fadeInRight" id="services">
                    <div class="services-block">
                        <div class="col-md-offset-0">
                            <h1>ВНИМАНИЕ!</h1>
                            <p>

                                УВОЖАЕМЫЕ ИГРОКИ! ИГРА ПРОИСХОДИТ НА ВНУТРЕННЮЮ ВАЛЮТУ  <span class="in_curr"><i class="far fa-registered"></i></span> <br>
                                <b><span class="in_curr">1<i class="far fa-registered"></i></span></b> ИМЕЕТ ЦЕННОСТЬ <span class="in_curr">1  РУБЛЬ</span> ПО КУРСУ ЦБ РФ. <br>

                                ПОКУПКА  ПРОДАЖА <span class="in_curr"><i class="far fa-registered"></i></span>  ПРОИСХОДИТ АВТОМАТИЧЕСКИ,
                                <br>
                                ПО КУРСУ ОДИН  К ОДНОМУ <span class="in_curr">1<i class="far fa-registered"></i>  - 1 РУБЛЬ РФ.</span> <br>

                                ДЛЯ ИГРОКА ДАНННАЯ ОПЕРАЦИЯ НИ ЗАМЕТНА, ПРОИСХОДИТ МГНОВЕННО <br>
                                ОБМЕН СРЕДСТВ ИГРОКОВ ОСУЩЕСТВЛЯЕТСЯ ЧЕРЕЗ ЭЛЕКТРОННЫЕ ДЕНЬГИ И КРИПТОВАЛЮТЫ

                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    {include file='footer.tpl'}
    <script>
        $(document).ready(function () {
            $('#top-menu a.tab').click(function (event) {
                event.preventDefault();
                var cler =  $('body .sect, #top-menu a.tab').removeClass('default');

                if  (cler) {
                    var link = $(this).attr('href');
                    var block = $('body').find(link);
                    block.addClass('default');
                    $(this).addClass('default');
                }
            });
        });
    </script>
{/strip}