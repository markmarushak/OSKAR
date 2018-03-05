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
                                ['balance', 'Финансы / Вывод / Пополнение', 'count'=>$count_opers],

                                ['refsys', 'Моя Баунти Ссылка / Рефбэк - 10%', 'skip'=>!$_cfg.Ref_Word],
                                ['balance/wallets', 'Платежные реквизиты']
                                ]}

                               <!-- <li><a href="{_link module='udp/about'}">История</a></li> -->
                                <li><a href="{_link module='account'}">Мои настройки</a></li>
                                {include file='links.el.topmenu.tpl' module='index/index' params='out' text='на главную'}
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
                {if $curr1.wBal > 100}
                    <form action="{_link module='cabinet/random_func'}" method="post">
                        {assign var=x value=0}
                        {assign var=a value=$r_min.number}
                        {assign var=b value=$r_max.number}
                        <input name="rand" type="hidden" value="{math equation= 'x = rand(a,b)'  x=$x a=$a b=$b}">
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