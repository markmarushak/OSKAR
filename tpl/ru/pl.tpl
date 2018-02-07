{strip}
{if count($pl_params.Pages) > 0}
<div class="text-center">
		<ul class="pagination">

		{*<small>Страница {$pl_params.Page} из {$pl_params.PagesCount}</small>*}
		{if count($pl_params.Pages) > 0}&nbsp;&nbsp;&nbsp;{/if}
		{foreach from=$pl_params.Pages key=i item=pn}
			<li>
			<a href="{$_selfLink}?page={$pn[1]}{$linkparams}" class="{if $pn[1] == $pl_params.Page}pgactive{else}pgbutton{/if}">
				{if $pn[0] == '&lt;&lt;'}
					Первая
				{elseif $pn[0] == '&lt;'}
					Назад
				{elseif $pn[0] == '&gt;'}
					Вперед
				{elseif $pn[0] == '&gt;&gt;'}
					Последняя
				{else}
					{$pn[0]}
				{/if}
			</a>
			</li>
		{/foreach}
		</ul>
</div>

{/if}
{/strip}