{strip}
{include file='admin/header.tpl' title='Statistics'}

<h2>Information</h2>

Total users: {$users.all}, incl. active: {$users.active}, incl. with deposits: {$users.wdepo}<br>
Total dposits: {$deps.all}, incl. active: {$deps.active}<br>
<br>

<table class="FormatTable" border="1">
	<tr>
		<th></th>
		<th colspan="11">Operation</th>
		<th rowspan="2"><small>Active deposits</small></th>
		<th colspan="3">Balance</th>
	</tr>
	<tr>
		<th>Pay.system</th>
		<th><small>Bonus</small></th>
		<th><small>Penalty</small></th>
		<th><small>Add funds</small></th>
		<th><small>Ref.com</small></th>
		<th><small>Deposit</small></th>
		<th><small>Reinvest</small></th>
		<th><small>Removal</small></th>
		<th><small>Accrual</small></th>
		<th><small>Calcout</small></th>
		<th><small>Pending</small></th>
		<th><small>Withdrawal</small></th>
		<th><small>Available</small></th>
		<th><small>Locked</small></th>
		<th><small>Waiting</small></th>
	</tr>
{foreach $currs as $cid => $c}
	<tr>
		<td align="right">{$c.cName}&nbsp;<i><small>{$c.cCurr}</small></i></td>
		<td align="right">{_z($stat[$cid].BONUS, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].PENALTY, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CASHIN, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].REF, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].GIVE, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].GIVE2, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].TAKE, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CALCIN, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CALCOUT, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CASHOUT2, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CASHOUT, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].DEPO, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].BAL, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].LOCK, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].OUT, $cid, -1)}</td>
	</tr>
{/foreach}
<tr>
	<td align="right"><b>TOTAL:</b></td>
	<td align="right"><b>{_z($stat[0].BONUS, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].PENALTY, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CASHIN, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].REF, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].GIVE, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].GIVE2, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].TAKE, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CALCIN, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CALCOUT, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CASHOUT2, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CASHOUT, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].DEPO, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].BAL, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].LOCK, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].OUT, 1, -1)}</b></td>
</tr>
</table>
<br>

{include file='edit.tpl'
	title='Filter parameters'
	fields=[
		'PSys'=>
			[
				'S',
				'Pay.system',
				0,
				[0=>'- all -'] + (array)$clist
			],
		'D1'=>
			[
				'DT',
				'Date from',
				'default'=>$today
			],
		'D2'=>
			[
				'DT',
				'Date to'
			]
	]
	btn_text='Show'
}

{if $res}
<br>
<table class="FormatTable" border="1">
	<tr>
		<td>Registtrations</td>
		<td align="right">{$res.REG}</td>
	</tr>
	<tr>
		<td>Bonus</td>
		<td align="right">{_z($res.BONUS, 1)}</td>
	</tr>
	<tr>
		<td>Penalty</td>
		<td align="right">{_z($res.PENALTY, 1)}</td>
	</tr>
	<tr>
		<td>Add funds</td>
		<td align="right">{_z($res.CASHIN, 1)}</td>
	</tr>
	<tr>
		<td>Ref.com</td>
		<td align="right">{_z($res.REF, 1)}</td>
	</tr>
	<tr>
		<td>Deposit</td>
		<td align="right">{_z($res.GIVE, 1)}</td>
	</tr>
	<tr>
		<td>Removal</td>
		<td align="right">{_z($res.TAKE, 1)}</td>
	</tr>
	<tr>
		<td>Accrual</td>
		<td align="right">{_z($res.CALCIN, 1)}</td>
	</tr>
	<tr>
		<td>Calcout</td>
		<td align="right">{_z($res.CALCOUT, 1)}</td>
	</tr>
	<tr>
		<td>Withdraw</td>
		<td align="right">{_z($res.CASHOUT, 1)}</td>
	</tr>
	<tr>
		<td>Deposited</td>
		<td align="right">{_z($res.DEPO, 1)}</td>
	</tr>
	<tr>
		<td>incl. active now</td>
		<td align="right">{_z($res.DEPO2, 1)}</td>
	</tr>
	<tr>
		<td>System profit</td>
		<td align="right">{_z($res.CASHIN - $res.CASHOUT, 1)}</td>
	</tr>
</table>

{/if}

{include file='admin/footer.tpl'}
{/strip}