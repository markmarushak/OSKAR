{strip}
{if $currs}
<table class="table" border="1">
	<tr>
		<th>Плат. система</th>
		<th><small>Доступно</small></th>
		<th><small>Занято</small></th>
		<th><small>Ожидает</small></th>
	</tr>
{foreach from=$currs key=i item=c}
{if ($c.wBal != 0) or ($c.wLock != 0) or ($c.wOut != 0)}
	<tr>
		<td>{$c.cName} <i><small>{$c.cCurr}</small></i></td>
		<td align="right">{_z($c.wBal, $c.wcID, -1)}</td>
		<td align="right">{_z($c.wLock, $c.wcID, -1)}</td>
		<td align="right">{_z($c.wOut, $c.wcID, -1)}</td>
	</tr>
{/if}
{/foreach}
</table>
{/if}
{/strip}
