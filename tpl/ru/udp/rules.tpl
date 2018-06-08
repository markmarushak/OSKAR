{strip}
    {include file='header.tpl' title='Правила'}
    <style>
        .br-ruls {
            background: #282E34;
            color: #eee;
            border-radius: 20px;
            padding: 10px;
            margin: 10px 0;
        }
        .sect {
            display: none;
        }
        .sect.default {
            display: block;
        }
    </style>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/home"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#ruls">Правила игр</a>
                        </li>
                        <li>
                            <a href="#ruls-2">Правила игр</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container sect default" id="ruls">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                <div class="br-ruls animated fadeInRight">
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
                <section class="services br-ruls animated fadeInLeft" id="services">
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
            $('.nav a:not([href="/home"])').click(function (event) {
                event.preventDefault();
                var cler =  $('body .sect').removeClass('default');
                if  (cler) {
                    var link = $(this).attr('href');
                    var block = $('body').find(link);
                    block.addClass('default');
                }
            });
        });
    </script>
{/strip}