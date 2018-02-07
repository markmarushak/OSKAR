{strip}
{include file='header.tpl' title='Баланс'}

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