{strip}
{include file='header.tpl' title='Баланс'}

<style>
	
	#operations {
		background: url('http://www.blockchainsoftware.com.au/wp-content/uploads/2016/03/banner.gif');
	}

</style>

{if isset($smarty.get.fail)}

	<h2>Операция НЕ завершена!</h2>
	<p class="info">
		Процедура пополнения была прервана или произошла ошибка.<br>
		Попробуйте <a href="{$_selfLink}">повторить операцию</a> позже
	</p>

{else}
	<div class="table-section operations" id="operations">
		

		<div class="header-section uppercase">
			<div class="header-box">
				
				<h1>Баланс</h1>

				<div class="good-text" style="width: 600px;margin: 0 auto; font-weight: 600; box-shadow: 0 0 10px 5px gold; background: #333;color: #fff;padding: 8px 15px; border-radius: 10px"><img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-1383.gif">
			<span>ЕСЛИ НЕТ МОНЕТ, НО ХОЧЕТСЯ ПОИГРАТЬ  НА КРИПТОВАЛЮТУ. <br> ДЛЯ ВАШЕГО УДОБСТВА, РЕКОМЕНДУЕМЫЕ СПОСОБЫ <br> ПОКУПКИ КРИПТОВАЛЮТЫ И ОБМЕНА ФИАТА.</span>
		</div>
				<br>
				<span>{include file='balance/_bal.tpl'}</span>

			</div>
		</div>
		<div class="vertical-middle oper-btn">
				<a  href="{_link module='balance/oper'}?add=CASHIN" class="button-green m-gren" >Пополнить</a>

				&nbsp;<a href="{_link module='balance/oper'}?add=CASHOUT" class="button-green m-gren">Вывести</a>

			

				&nbsp;<a href="{_link module='balance/oper'}?add=TR" class="button-green m-gren">Перевести игроку</a>
				<br>
		</div>
		<div class="footer-section">

			<ul class="depo_btn oper-fot-btn">
                {if _uid()}
                    {include file='links.el.topmenu.tpl' module='cabinet' text='Назад'}

                {/if}
			</ul>
		</div>
	</div>
	{if $list}



		{*{include file='list.tpl' *}
			{*title='Операции'*}
			{*url='*'*}
			{*fields=[*}
				{*'oTS'=>['Дата'],*}
				{*'oOper'=>['Операция'],*}
				{*'oCID'=>['Плат.система'],*}
				{*'oSum1'=>['Приход'],*}
				{*'oSum2'=>['Расход'],*}
				{*'oBatch'=>['Batch-номер'],*}
				{*'oState'=>['Статус'],*}
				{*'oMemo'=>['Примечание']*}
			{*]*}
			{*values=$list*}
			{*row='*'*}
		{*}*}
		
	{/if}

{/if}

{include file='footer.tpl'}
{/strip}