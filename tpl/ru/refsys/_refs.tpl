{strip}
{$states=[
	0=>'Не активен',
	1=>'Активен',
	2=>'Заблокирован',
	3=>'Отключен'
]}

Приглашенные
{*<table class="FormatTable" border="1">
	<tr>
		<th>Пользователь</th>
		<th>Статус</th>
		<th>Плат. система</th>
		<th>Сумма</th>
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
		<th>Пользователь</th>
		<th>Дата регистрации</th>
		<th>Вклады</th>
		<th>Рефские</th>
	</tr>
{foreach from=$refs key=i item=r}
	{if count($refs) > 1}
		<tr>
			<td colspan="4" align="center">Уровень {$i + 1}{if $r.perc}: {$r.perc}%{/if}</td>
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