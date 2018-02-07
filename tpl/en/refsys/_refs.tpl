{strip}
{$states=[
	0=>'Non-active',
	1=>'Active',
	2=>'Blocked',
	3=>'Disabled'
]}

Приглашенные
{*<table class="FormatTable" border="1">
	<tr>
		<th>User</th>
		<th>State</th>
		<th>Pay.system</th>
		<th>Amount</th>
	</tr>
{foreach from=$refs key=i item=r}
	<tr>
		<td>{$r.uLogin}</td>
		<td>{$states[$r.uState]}</td>
		<td>{$r.cName}</td>
		<td align="right">{if $r.cName}{_z($r.rSum, $r.cID)}{/if}</td>
	</tr>
{/foreach}
</table>*}
<table class="FormatTable" border="1">
	<tr>
		<th>User</th>
		<th>Reg.date</th>
		<th>Deposits</th>
		<th>Amount</th>
	</tr>
{foreach from=$refs key=i item=r}
	{if count($refs) > 1}
		<tr>
			<td colspan="4" align="center">Level {$i + 1}{if $r.perc}: {$r.perc}%{/if}</td>
		</tr>
	{/if}
	{foreach from=$r.users key=j item=u}
		<tr>
			<td>{$u.uLogin}</td>
			<td>{$u.aCTS}</td>
			<td align="right">{_z($u.ZDepo, 1)}</td>
			<td align="right">{_z($u.ZRef, 1)}</td>
		</tr>
	{/foreach}
{/foreach}
</table>

{/strip}