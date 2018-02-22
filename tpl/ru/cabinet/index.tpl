{strip}
    {include file='header.tpl' title='Кабинет'}

    {*<h1>Кабинет</h1>*}

    {*{include file='balance/_bal.tpl'}*}
    {*<br><br>*}
    {*{include file='balance/_stat.tpl'}*}

    <!-- cabinet -->
    <header class="cabinet table-section white" id="cabinet">

        <div class="top-wrap">
            <div class="top-name">
                <span>
                    Личный кабинет : {$user.aName}
                </span>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-10">
                        <nav class="top-menu" id="top-menu">
                            <!--  <div class="logo">
                                  <span></span>
                              </div>   -->
                            <div class="button_nav_open">
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                            <ul class="horizontal-menu text-right memu-close-768">

                                {include file='menu.tpl'
                                class='mainMenu'
                                elements=[
                                ['balance', 'Баланс / Пополнение / Вывод', 'count'=>$count_opers],

                                ['refsys', 'Моя Баунти(Реферальная ссылка)', 'skip'=>!$_cfg.Ref_Word],
                                ['balance/wallets', 'Платежные реквизиты']
                                ]}

                                <li><a href="{_link module='udp/about'}">История</a></li>
                                <li><a href="{_link module='account'}">Личные Данные</a></li>
                                {include file='links.el.topmenu.tpl' module='index/index' params='out' text='вернуться на сайт'}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="vertical-middle main-text">
            <arcticle>
                <div class="cabinet-ballance">
                    <b>Минимальная сумма участия: 100 рублей</b>
                    <br>
                    Ваш баланс:
                    <span> {$curr1.wBal}</span>
                </div>
            </arcticle>
            <div class="item-button-top cabinet-next">
                {if $curr1.wBal > 100}
                    {*<form action="{_link module='depo/depo'}?add">*}
                    <form action="{_link module='cabinet/random_func'}" method="post">
                        {assign var=x value=0}
                        <input name="rand" type="hidden" value="{math equation='x = rand(0,16)' x=$x}">
                        <input type="submit" value="Играть еще" class="button-green">
                    </form>
                {else}
                    <a href="{_link module='balance/oper'}?add=CASHIN" class="button-green">Пополнить</a>
                {/if}

                <a class="m-gren" href="{_link module="review"}">онлайн чат</a>
            </div>

        </div>
    </header>
    {include file='footer.tpl'}
{/strip}