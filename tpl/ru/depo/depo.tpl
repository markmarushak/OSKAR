{strip}
{include file='header.tpl' title='Лотерея'}

{if $el}
	<div class="table-section depo-end white">
		<div class="header-section">
			<h2>играйте еще и выигрывайте больше!</h2>
		</div>
		<div class="vertical-middle vert-top">
			<div class="header-box">
				<h1 class="text-center uppercase">Вы выиграли !!!</h1>

				<br>
				<span>
						Ваш выигрыш составляет :&nbsp;
                    {_z($el.dZD, $el.dcID, 1)}
					</span>
				<br>
				{*<p>Вам будет начислено <br> в течение {$el.pNPer} дней по {_z($el.dZD, $el.dcID, 1)*(1/4)} USD</p>*}
				<div class="boxxx">сроком {$el.pNPer} дня</div>
				<p>рискни и будешь вознагражден!</p>
			</div>



            {include file='depo/_depo.tpl'}
		</div>
		<div class="footer-section depo">

			<ul class="depo_btn gold">
                {if _uid()}
                    {include file='links.el.topmenu.tpl' module='/cabinet' text='Личный кабинет'}

                {/if}
			</ul>
		</div>
	</div>
{else}
	<div class="table-section">
	<div class="header-section">

	</div>
	<div class="vertical-middle">
		<div class="header-box">
			<h1 class="text-center uppercase">Принять участие</h1>
			<br>
			<span>
				текущий балланс :&nbsp;
                {if $curr1}
                    {*{include file='links.element.tpl' module='balance' text='Баланс'}*}
                    {_z($curr1.wBal, $curr1.cID, 2)}
                {/if}
			</span>

		</div>

        {include file='depo/_depo.new.tpl'}


	</div>
	<div class="footer-section"></div>
	</div>
{/if}

{include file='footer.tpl'}
{/strip}