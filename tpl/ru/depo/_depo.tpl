{strip}

{include file='depo/_statuses.tpl'}

{$chg=(($el.dState == 1) and ($el.pCompndMax > 0) and ($el.pCompndMin < $el.pCompndMax))}
{$modbuttons=[] scope='global'}
{if $chg}
	{$modbuttons['chg']='Сменить процент реинвеста' scope='global'}
{/if}

{$add=$el.pEnAdd}
{$sub=(($el.pClComis < 100) and ($el.dNPer >= $el.pMPer))}
{$modform=[] scope='global'}
{if ($el.dState == 1) and ($add or $sub)}
	{$modform=[
		1=>'',
		'Sum'=>
			[
				'$',
				'Сумма изменения!!',
				[
					'sum_empty'=>'укажите сумму',
					'sum_wrong'=>'неверная сумма',
					'low_bal1'=>'недостаточно средств',
					'cant_add'=>'невозможно довложить',
					'cant_sub'=>'невозможно снять',
					'plan_not_found'=>'нет подходящего плана'
				],
				'comment'=>" <i><small>{$el.cCurr}</small></i>",
				'default'=>0
			]
	] scope='global'}
	{if $add}
		{$modbuttons['add']='ДОвложить' scope='global'} 
	{/if}
	{if $sub}
		{$modbuttons['sub']='Снять' scope='global'}
	{/if}
{/if}

{include file='edit.my.tpl'
	title=valueIf($from_admin, 'Депозит')
	fields=[
		'dID'=>[],
		'duID'=>[],
		'dcID'=>[],
		'dState'=>
			[
				'',
				'',
				0,
				"<b>Вывыиграли !!!</b>"
			],
		'dCTS'=>
			[
				'',
				'Дата выиграша'
			],
		'uLogin'=>
			[
				'X',
				'Пользователь',
				'skip'=>!$from_admin
			],
		'Bal'=>
			[
				'U',
				'balance/bal.tpl',
				'skip'=>!$from_admin
			],
		'cName'=>
			[
				'',
				'Плат. система'
			],
		'dZD'=>
			[
				'',
				'Каждый день по',
				0,
				_z($el.dZD, $el.dcID, 1)/4

			],
		'pName'=>
			[
				'',
				'План',
				0,
				valueIf($from_admin, "<a href=\"{_link module='depo/admin/plan'}?id={$el.dpID}\" target=\"_blank\">{$el.pName}</a>")
			],
		'dN'=>
			[
				'',
				'Вам будет начисленно в течении ',
				0,
				"{$el.dNPer} из {$el.pNPer}"
			],
		'dLTS'=>
			[
				'',
				'Последнее начисление'
			],
		'dNTS'=>
			[
				'',
				'Следующее начисление'
			],
		'dCompnd'=>
			[
				'',
				'Процент реинвеста <<капитализация>>',
				'skip'=>$chg
			],
		'Compnd'=>
			[
				'',
				'Процент реинвеста <<капитализация>>',
				[
					'compnd_wrong'=>"неверное значение [$cmin..$cmax]"
				],
				'default'=>$el.dCompnd,
				'skip'=>!$chg
			],
		'dM'=>
			[
				'',
				'Досрочное снятие',
				0,
				valueIf($el.pClComis >= 100, 'Невозможно',
					valueIf($el.dNPer >= $el.pMPer, "Возможно", 
						"Осталось начислений: {$el.pMPer - $el.dNPer}")
				),
				'skip'=>($el.dState > 1)
			]
	]+$modform
	values=$el
	errors=[
		'oper_disabled'=>'операция запрещена'
	]
	btn_text=' '
	btns=$modbuttons
}


{/strip}