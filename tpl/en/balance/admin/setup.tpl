{strip}
{include file='admin/header.tpl' title='Settings'}

{if $curr1}
	<p class="info">
		{if $_cfg.Const_IntCurr}
			Script is running in "Uniform currency ({$curr1.cCurrID})" mode.<br>
			This means that all the operations in the system will performs only in this currency,<br>
			all funds, supplemented with external payment systems will automatically<br>
			converted into local currency at the following rate
		{else}
			Added only one payment system and script takes it as a single
		{/if}
	</p>
{/if}

{include file='edit.tpl' 
	values=$cfg
	fields=[
		'RegBonus'=>['$', 'The bonus amount for registration <<in internal units>>', 'skip'=>!$_cfg.Const_IntCurr],
		'LockWallets'=>['C', 'Deny to change payment details'],
		1=>'Rates (in internal units)',
		'RateUSD'=>['$', '1 USD ='],
		'RateEUR'=>['$', '1 EUR ='],
		'RateRUB'=>['$', '1 RUB ='],
		'UpdateRates'=>['C', 'Refresh rates <<from cite cbr.ru>>', 'comment'=>$lastupdate],
		'RateBTC'=>['$', '1 BTC ='],
		
		'Add funds',
		'CASHINText'=>['T', 'Memo <<use #id#, #user#>>', 'size'=>30],
		'ForcePayer'=>['C', 'Force <<and fix>> payeer accont number'],

		'Withdraw',
		'CASHOUTText'=>['T', 'Memo <<use #id#, #user#>>', 'size'=>30],
		'NeedPIN'=>['C', 'Require PIN-code <<in manual mode>>'],
		
		'Automatic withdraw',
		'AWDBONUS'=>['C', 'Bonus'],
		'AWDEXIN'=>['C', 'Exchange'],
		'AWDTRIN'=>['C', 'Transfer'],
		'AWDSELL'=>['C', 'Sell'],
		'AWDSELL2'=>['C', 'Sell service'],
		'AWDREF'=>['C', 'Ref.bonus'],
		'AWDTAKE'=>['C', 'Removal'],
		'AWDCALCIN'=>['C', 'Accrual']
	]
}
	
{include file='admin/footer.tpl'}
{/strip}