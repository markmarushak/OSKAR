{strip}
{include file='header.tpl' title='Реферальная система'}

<h1>Реферальная система</h1>

{if _uid()}

	{include file='edit.tpl'
		fields=[
			'RefLogin'=>
				[
					'X',
					'Вас пригласил',
					0,
					$reflogin,
					'skip'=>!$reflogin
				],
			'RefURL'=>
				[
					'X',
					'Ваша реф-ссылка',
					0,
					"<a href=\"{$refurl}\" target=\"_blank\">{$refurl}</a>"
				],
			'Refs'=>
				[
					'U',
					'refsys/_refs.tpl',
					'skip'=>!$refs
				]
		]
		btn_text=' '
	}

	{if $_cfg.Account_RegMode == 3}
	
		<h2>Инвайты</h2>
		
	{/if}
	
{/if}

<h2>Рекламные материалы</h2>

Здесь будут баннеры и кнопки

{include file='footer.tpl'}
{/strip}