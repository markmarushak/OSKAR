{strip}
    {include file='header.tpl' title='Правила'}
    <style>
        body, body.ruls {
            background-image: url(assets/img/rules.jpg);
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
            transition: all 1s ease-in-out;
        } 
        body.ruls-2 {
            background-image: url(https://cdn0.vox-cdn.com/uploads/archives/4381550/static.30fce68fad73514bda60d6487140f71e.gif);
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
        .rules-menu .header_logo_4u {
            width: 35px;
            height: 30px;
            vertical-align: -7px;
        }
        .top-menu li img {
            width: 35px;
            height: 30px;
            vertical-align: -7px;
        }

    </style>

      
    <div class="container rules-menu">
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
                                        <li><a class="tab default" href="ruls">Правила игр <b class='header_logo_4u'></b> </a></li>
                                        <li><a class="tab" href="ruls-2">о внутренней валюте<img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-441.gif"></li>
                                        
                                        {if _uid()}
                                        <li><a href="{_link module='cabinet'}"><span class="door"><img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-968.gif"></span> игровой аккаунт</a></li>
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
                                <h3 class="sign__word_game">ПРАВИЛА ИГР НА <span class="name_logo"><b class='header_logo_4u'></b></span></h3>
                            </header>
                        </div>
                        <div class="ver-mi middle">
                            <!--  <div class="col-md-10 col-md-offset-0"> -->
                            <div class="col-md-offset-0" style="text-transform: uppercase; text-size:1.2em; line-height: 1.5;">
                                <p>
                                    
                                    <br>
                                    ВЫБЕРИТЕ 1 ИЗ 10 ИГРОВЫХ ТЕМ <a href="/group_menu">список тем</a>
                                    <br>
                                    НАЗНАЧТЕ ЦЕНУ ВОПРОСА  ОТ 100<span class="in_curr"><i class="far fa-registered"></i></span> ДО 100 000<span class="in_curr"><i class="far fa-registered"></i></span> <br>
                                    ПОПАВ В ИГРУ ОТВЕТТЕ ПРАВИЛЬНО НА ПРОСТОЙ ВОПРОС ИЗ 4 ВАРИЙАНТОВ <br>
                                    ВЫБЕРИТЕ СВОЙ КЕЙС<br><br>
                                    <span class="in_curr case"><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i></span>
                                    <br>
                                    В КАЖДОМ КЕЙСЕ НАХОДИТСЯ ОТ <span class="in_curr">7%</span> ДО <span class="in_curr">2000%</span> ОТ НАЗНАЧЕННОЙ СТОИМОСТИ ВАШЕГО ВОПРОСА <br>
                                    ТАК-ЖЕ В КЕЙСЕ ЗАШИФРОВАН СРОК ПОЛУЧЕНИЯ ВЫИГРЫША &bull; ОТ  <span class="in_curr">24</span> ДО <span class="in_curr">96</span> ЧАСОВ &bull; БУДЕТ ЗАЧИСЛЕН <br> НА ИГРОВОЙ АККАУНТ КАЖДЫЕ <span class="in_curr">24</span> ЧАСА РАВНЫМИ ДОЛЯМИ
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
                <section class="services br-ruls animated fadeInLeft" id="services">
                    <div class="services-block">
                        <div class="col-md-offset-0">
                            <h1 class="sign__word_game">ATTENTION!</h1>
                            <p>

                                УВОЖАЕМЫЕ ИГРОКИ! <br> ИГРА ПРОИСХОДИТ НА ВНУТРЕННЮЮ ВАЛЮТУ  <span class="in_curr"><i class="far fa-registered"></i></span> <br>
                                <b><span class="in_curr">1<i class="far fa-registered"></i></span></b> ИМЕЕТ ЦЕННОСТЬ <span class="in_curr">1  РУБЛЬ</span> ПО КУРСУ <a href="цб.рф">ЦБ.РФ</a> <br>

                                ПОКУПКА  ПРОДАЖА <span class="in_curr"><i class="far fa-registered"></i></span>  ПРОИСХОДИТ АВТОМАТИЧЕСКИ,
                                
                                ПО КУРСУ<br>ОДИН  К ОДНОМУ <span class="in_curr">1<i class="far fa-registered"></i>  - 1 РУБЛЬ РФ.</span> <br>

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
                $('body').removeClass('ruls ruls-2');

                if  (cler) {
                    var link = $(this).attr('href');
                    $('body').addClass(link);
                    var block = $('body').find('#'+link);
                    block.addClass('default');
                    $(this).addClass('default');
                }
            });
        });
    </script>
{/strip}