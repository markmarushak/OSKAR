{strip}
{include file='header.tpl' title='Кабинет'}

{*<h1>Кабинет</h1>*}

{*{include file='balance/_bal.tpl'}*}
{*<br><br>*}
{*{include file='balance/_stat.tpl'}*}

    <!-- cabinet -->
    <header class="cabinet table-section white" id="cabinet">
        <div class="top-wrap">
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
            {*<div class="item-text">*}
                {*{if $list}*}
                    {*<table class="table cabinet-table table-hover">*}
                        {*<thead>*}
                            {*<tr>*}
                                {*<th class="text-center">Пользователь</th>*}
                                {*<th class="text-center">Сумма депозитов</th>*}
                            {*</tr>*}
                        {*</thead>*}
                        {*{foreach from=$list key=i  item=r }*}
                            {*{if $r.RSUM}*}
                                    {*<tr>*}
                                        {*<td>{$r.uLogin}</td>*}
                                        {*<td>{_z($r.RSUM, 1)}</td>*}
                                    {*</tr>*}
                            {*{/if}*}
                        {*{/foreach}*}
                    {*</table>*}
                {*{/if}*}
            {*</div>*}
            <div class="item-button-top cabinet-next">
                {if $user.uBal > 0}
                    <a href="{_link module='depo/depo'}?add" class="button-green">Играть еще</a>
                {else}
                    <a href="{_link module='balance/oper'}?add=CASHIN" class="button-green">Пополнить</a>
                {/if}

                <a class="m-gren" href="{_link module="review"}">онлайн чат</a>
            </div>

        </div>
    </header>




    {include file='footer.tpl'}
{/strip}