{strip}
{include file='header.tpl' title='Кабинет'}

{*<h1>Кабинет</h1>*}

{*{include file='balance/_bal.tpl'}*}
{*<br><br>*}
{*{include file='balance/_stat.tpl'}*}
{assign var=min value=$min.number}
{assign var=max value=$max.number}
{assign var=result value=$min+mt_rand()/mt_getrandmax()*($max-$min)}
    <!-- cabinet -->
    <header class="cabinet table-section white" id="cabinet">
        <div class="top-wrap" id="top-wrap">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-10">
                        <nav class="top-menu" id="top-menu">
                            <div class="name-is-cabinet">
                                <span class="logo-cabinet"><h1>4U - </h1><h2> four you <i class="fab fa-gratipay"></i></h2></span>
                                <ul>
                                    <li>
                                        <span>
                                            <i>Личный кабинет : </i>
                                            {$user.aName}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i>Игровой баланс : </i>
                                            <b>{$curr1.wBal}</b>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="button_nav_open">
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                            <ul class="horizontal-menu text-right memu-close-768">

                                {*{include file='menu.tpl'*}
                                {*class='mainMenu'*}
                                {*elements=[*}
                                {*['balance', 'Финансы / Вывод / Пополнение', 'count'=>$count_opers],*}

                                {*['refsys', 'Баунти', 'skip'=>!$_cfg.Ref_Word],*}
                                {*['balance/wallets', 'Платежные реквизиты']*}
                                {*]}*}
                                <li><a href="{_link module='balance'}"><i class="fab fa-btc"></i>&nbsp; Финансы / Вывод / Пополнение</a></li>
                                <li><a href="{_link module='refsys'}"><i class="fas fa-gift"></i>&nbsp; Баунти</a></li>
                                <li><a href="{_link module='balance/wallets'}"><i class="fas fa-credit-card"></i>&nbsp;Платежные реквизиты</a></li>
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
                            <label for="game_onstar">Ирать еще</label>
                        </div>
                    </form>
                {else}
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