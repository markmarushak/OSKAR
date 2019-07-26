{strip}
{include file='header.tpl' title='Кабинет'}
    
    <style>
        .name-menu {
            text-shadow: 1px 1px 4px #eee, 2px 2px 25px blue;
            color: #fff;
            text-transform: uppercase;
        }
    </style>
    <div class='top-left-ab'><span class=""><img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-815.gif"></span> </div>
    
    <!-- cabinet -->
    <header class="cabinet table-section white" id="cabinet">
        <div class="top-wrap" id="top-wrap">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="top-menu" id="top-menu">
                            <div class="name-is-cabinet">
                                <span class="logo-cabinet"><h1><b class='header_logo_4u'></b></h1><h2> four you <i class="fab fa-gratipay"></i></h2></span>
                                <ul>
                                    <div class="avatar">
                                        <img src="{if $avatar.url_img}{$avatar.url_img}{else}assets/img/player_inco.png{/if}" alt="">
                                        <div class="nickname">
                                            <b><span class="door"><img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-914.gif"></span>{$user.aName}</b>
                                        </div>
                                        <div class="ballance">
                                            <div>игровой баланс</div>
                                            <b><span class="in_curr">{$curr1.wBal}  <i class="far fa-registered"></i></span></b>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <div class="button_nav_open">
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                            <ul class="horizontal-menu text-right memu-close-768 cabinet-menu">
                                <!-- <h3 class="name-menu">игровое меню</h3> -->
                                <li><a href="{_link module='payment'}"><i class="fab fa-btc"></i>&nbsp; Финансы &bull; Вывод &bull; Пополнение</a></li>
                                <li><a href="{_link module='refsys'}"><i class="fas fa-gift"></i>&nbsp; Баунти</a></li>
                                {*<li><a href="{_link module='balance/wallets'}"><i class="fas fa-credit-card"></i>&nbsp;Платежные реквизиты</a></li>*}
                               <!-- <li><a href="{_link module='udp/about'}">История</a></li> -->
                                <li><a href="{_link module='account'}"><i class="fas fa-cog"></i>&nbsp; настройки</a></li>
                                <li><a href="{_link module='index/home'}"><i class="fas fa-home"></i>&nbsp; на главную</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="vertical-middle main-text">
            <div class="item-button-top cabinet-next">
                
                {if $curr1.wBal > 1}
                    <form action="{_link module='cabinet/group_menu'}" method="post">
                        <input name="rand" type="hidden" value="{$result}">
                        <div>

                            <input id="game_onstar" type="submit" value=" " class="button-green">
                            <label for="game_onstar">Играть еще</label>
                        </div>
                    </form>
                {else if false}
                    <div class="cashin">
                        <label for="cash_id"></label>
                        <a id="cash_id" href="{_link module='balance/oper'}?add=CASHIN" class="button-green">Пополнить</a>
                    </div>
                {/if}


               <div class="to_chat">
                   <label for="online_chat"></label>
                   <a id="online_chat" class="m-gren" href="{_link module="review"}">онлайн чат</a>
               </div>
            </div>

        </div>
    </header>




    {include file='footer.tpl'}
{/strip}