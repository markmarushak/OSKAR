{strip}

{include file='edit.tpl'
	fields=[
		'oID'=>[],
		'oState'=>
			[
				'X',
				'State',
				0,
				"<b>{$op_statuses[$el.oState]}</b>"
			],
		'oCTS'=>
			[
				'X',
				'Date'
			],
		'uLogin'=>
			[
				'X',
				'User',
				0,
				"<a href=\"{_link module='account/admin/user'}?id={$el.uID}\">{$el.uLogin}</a>",
				'skip'=>!$from_admin
			],
		'Login2'=>
			[
				'X',
				valueIf($el.oOper == 'TR', 'Receiver', 'Sender'),
				0,
				valueIf($from_admin, "<a href=\"{_link module='account/admin/user'}?id={$el.oParams.uid2}\">{$el.oParams.user}</a>", $el.oParams.user),
				'skip'=>!$el.oParams.uid2
			],
		'PSys'=>
			[
				'X',
				'Payment system',
				0,
				valueIf($from_admin, "<a href=\"{_link module='balance/admin/curr'}?id={$el.ocID}\">{$el.cName}</a>", $el.cName)
			],
		'PayTo'=>
			[
				'X',
				'Pay to account',
				0,
				$smarty.get.payto,
				'skip'=>!$smarty.get.payto
			],
		'oSum'=>
			[
				'X',
				'Amount',
				0,
				_z($el.oSum, $el.ocID, 1)
			],
		'oComis'=>
			[
				'X',
				'Comission',
				0,
				_z($el.oComis, $el.ocID, 1),
				'skip'=>($el.oComis == 0)
			],
		'Sum'=>
			[
				'X',
				$op_sums[$el.oOper],
				0,
				_z($el.oSum - $el.oComis, $el.ocID, 1),
				'skip'=>($el.oComis == 0)
			],
		'PSys2'=>
			[
				'X',
				valueIf($el.oOper == 'EX', 'To payment system', 'From payment system'),
				0,
				$el.oParams.psys,
				'skip'=>!$el.oParams.cid2
			],
		'Sum2'=>
			[
				'X',
				'Amount to receive',
				0,
				_z($el.oParams.sum2, exValue($el.ocID, $el.oParams.cid2), 1),
				'skip'=>!$el.oParams.sum2
			],
		'Acc'=>
			[
				'X',
				valueIf($el.oOper == 'CASHOUT', 'Payee account', 'Payeer account'),
				0,
				$el.oParams2.acc,
				'skip'=>!in_array($el.oOper, array('CASHIN', 'CASHOUT')) or !$el.oParams2.acc
			],
		'oBatch'=>
			[
				'X',
				'Batch-number',
				'skip'=>!$el.oBatch
			],
		'oMemo'=>
			[
				'X',
				'Memo',
				'skip'=>!$el.oMemo,
				0,
				valueIf(!$from_admin and ($el.oMemo[0] == '~'), 'Error', $el.oMemo)
			],
		'oTS'=>
			[
				'X',
				'Modified',
				'skip'=>!$el.oTS
			],
		'oNTS'=>
			[
				'X',
				'Completed',
				'skip'=>!$el.oNTS
			]
	] + (array)$afields
	values=$el
	btn_text=$bt
	btns=$b
}

{if $afields}

	<br>
	<p class="info">
		For current payment system not set <a href="{_link module='balance/admin/curr'}?id={$el.ocID}">API settings</a><br>
		You can perform this operation by specifying the settings above. <br>
		It's safe, because entered data are not stored anywhere
	</p>
	
{/if}

{if $el.oOper == 'CASHIN'}

	{if !isset($smarty.get.payto)}
		{include file='balance/_pform.tpl' btn_text='Pay through the merchant'}
	{/if}

	{if $pvalues.acc}

		{if $el.oState <= 1}
		
			<br>
			<p class="info">
				{if $pform}If you can not pay directly through the merchant,<br>{/if}
				You can make a payment on the specified details manually,<br>
				and then specify the details of this payment in the form below
			</p>
			
		{/if}
		
		<h2>Our payment details<br>(to pay manually through {$el.cName})</h2>
		
		<table class="formatTable">
		{foreach from=$pfields key=f item=v}
		{if $pvalues[$f]}
			<tr>
				<td align="right">
					{$v[0] = str_replace('*', ' <span class="descr_rem">(optional)</span>', $v[0])}
					{if $f === 'acc'}
						Payee account <span class="descr_rem">({$v[0]})</span>
					{else}
						{$v[0]}
					{/if}
				</td>
				<td>
					<span class="uline">{$pvalues[$f]}</span>
				</td>
			</tr>
		{/if}
		{/foreach}
			<tr>
				<td align="right">
					Amount
				</td>
				<td>
					<span class="uline">{_z($el.oSum, $el.ocID, 1)}</span>
				</td>
			</tr>
		</table>
		
	{/if}
	
	{if isset($pvalues.acc) or ($from_admin and ($el.oState <= 2))}
	
		{include file='balance/_oper.data.tpl' oComis=0}
		
	{/if}
	
{elseif ($el.oOper == 'CASHOUT') and ($from_admin and ($el.oState <= 2))}

	{include file='balance/_oper.data.tpl' oComis=$el.oComis}

{/if}
	
{/strip}