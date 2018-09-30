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
            background-attachment:fixed;
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
        .home-bottom-center-blocks{
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-direction: row;
        }
        .home-bottom-center-blocks > * {
            width: 50%;
            text-transform: uppercase;
            margin: 0 10px;
        }
        .home-bottom-center-blocks > * .chil {
            display: inline-block;
            width: auto;
            box-shadow: 0 0 20px 0px;
            border: 1px solid #fff;
            border-radius: 10px;
            height: 100%;
            padding: 10px;
            font-size: 1.4em;
        }
        .chil i {
            color: gold;
        }

        .gold {
            color: gold;
        }
    </style>

    <!-- header -->
    <section class="header table-section white" id="header">

        <div class="top-wrap" id="top-wrap">
            <div class="container ">
                <div class="row">

                    <div class="col-md-10 col-md-offset-1">
                        <nav class="top-menu" id="top-menu">

                            <div class="button_nav_open">
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>


                            <ul class="horizontal-menu text-right memu-close-768">

                                <li><a href="{_link module="faq"}">faq</a></li>

                                <li class="closes-menu"><a href="/rules#one">правила игр</a></li>
                                <li class="closes-menu"><a href="/supp">поддержка</a></li>
                                <li class="ancor closes-menu"><a data-target="#baunti" data-toggle="modal" href="/rules#baunti">баунти</a></li>

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

        <div class="vertical-middle main-text">
            <div class="item-text">
                <h1 class="animated fadeInDown"><span>игровой портал </span><b class='header_logo_4u'></b> </h1>
                <hr>
            </div>
            <div class="home-bottom-center-blocks">
                <div class="block text-right">
                    <div class="chil">
                        <p>ОТЗЫВЧИВАЯ ПОДДЕРЖКА 24 <i class="fas fa-star"></i> 7 <i class="fas fa-star"></i> 365</p>
                        <p>АВТОМАТИЧЕСКИЕ ВЫПЛАТЫ И ОНЛАЙН ЧАТ</p>
                        <p>ВЕРИФИКАЦИЯ ИГРОВОГО АККАУНТА</p>
                        <p>ТРЕХ ФАКТОРНАЯ ЗАЩИТА ОТ ВЗЛОМА</p>
                    </div>
                </div>
                <div class="block text-left">
                    <div class="chil">
                        <p>В <span class="in_curr case"><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i></span> от 7% до 2000% выигрыш</p>
                        <p>+кэш-бэк <span class="gold">100%</span></p>
                        <p>БАУНТИ <span class="gold">10%</span> МОМЕНТАЛЬНО</p>
                        <p>ОТ <span class="gold">100<i class="fas fa-registered"></i></span> ДО <span class="gold">100 000<i class="fas fa-registered"></i></span> УЧАСТИЕ = ВЫИГРЫШ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section-1" id="home-section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <h3>Статистика Игр</h3>
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Нейм</th>
                                <th scope="col">Сумма</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$game_stat item=i key=k}
                                <tr>
                                    <th scope="row">
                                        {$i.dID}
                                    </th>
                                    <td>
                                        {if $i.aName}{$i.aName}{else}{$i.uLogin}{/if}
                                    </td>
                                    <td>
                                        {$i.dZD}
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </section> -->


    <div id="baunti" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Баунти</h4>
                </div>
                <div class="modal-body text-center">
                    <p>РЕФ-БЭК 10% ОТ СТАВКИ ПО ВАШЕЙ БАУНТИ ССЫЛКЕ</p>
                    <p>ССЫЛКА ДОСТУПНА В ИГРОВОМ АККАУНТЕ</p>
                    <p>НАЧИСЛЕНИЕ ПРОИЗВОДИТСЯ МГНОВЕННО!</p>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ОК</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <!-- Footer -->
    <footer class="footer to" id="footer">

        <div class="footer-text">
            <p class="text-footer">&copy; портал 4U  <a class="btn btn-info btn-user" href="https://drive.google.com/file/d/1Q0Kq2xtLxn60GcX69PmTm9dFEJDWMo91/view?usp=sharing" target="_blank">пользовательское соглашение</a></p>
        </div>
        <a id="to-top" href="#header" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>
    {include file='footer.tpl'}
{/strip}