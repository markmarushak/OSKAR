{strip}
{include file='header.tpl' title='Платежные реквизиты'}
<div class="table-section overflow-hidden" id="wallent">
<div class="header-section">
	<div class="text-center">
		<h1>Ваши платежные реквизиты для пополнения и вывода</h1><br>
		<span>/	<i>не забудьте сохранить данные</i>	/</span>
	</div>
	<div class="btn-si uppercase">
		<a href="{_link module="cabinet"}">личный кабинет</a>
	</div>
</div>
<div class="vertical-middle">
{if !$wfields}

	<p class="info">
		Платежные системы не подключены
	</p>

{else}

	{if $_cfg.Const_IntCurr}
		{$wfields = [
			'DefCurr'=>[
				'S',
				'Платежная система по умолчанию!!',
				[
					'psys_wrong'=>'укажите плат.систему'
				],
				[0=>'- выберите -'] + (array)$defcurr,
				'default'=>$user['aDefCurr']
			]
		]+$wfields}
	{/if}

	{if $showbutton and ($_cfg.Sec_MinPIN > 0)}
		{$wfields[] = ''}
		{$wfields['PIN'] = [
						'*',
						'Введите PIN-код!! <<чтобы подтвердить изменения>>',
						[
							'pin_wrong'=>'неверный код'
						],
						'size'=>8
					]}
	{/if}
	
	{include file='edit.my.tpl'
		url='*'
		fields=$wfields
		values=$wdata
		btn_text=valueIf(!$showbutton, '')
	}
	
{/if}
</div>
</div>
{include file='footer.tpl'}
{/strip}