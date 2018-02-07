{strip}
{include file='header.tpl' title='Referral system'}

<h1>Referral system</h1>

{if _uid()}

	{include file='edit.tpl'
		fields=[
			'RefLogin'=>
				[
					'X',
					'You invited by',
					0,
					$reflogin,
					'skip'=>!$reflogin
				],
			'RefURL'=>
				[
					'X',
					'Your referral link',
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
	
		<h2>Invites</h2>
		
	{/if}
	
{/if}

<h2>Promo materials</h2>

Banners here

{include file='footer.tpl'}
{/strip}