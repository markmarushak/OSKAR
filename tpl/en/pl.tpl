{strip}
{if count($pl_params.Pages) > 0}
	<div class="paginator">
		<small>Page {$pl_params.Page} of {$pl_params.PagesCount}</small>
		{if count($pl_params.Pages) > 0}&nbsp;&nbsp;&nbsp;{/if}
		{foreach from=$pl_params.Pages key=i item=pn}
			<a href="{$_selfLink}?page={$pn[1]}{$linkparams}" class="{if $pn[1] == $pl_params.Page}pgactive{else}pgbutton{/if}">
				{if $pn[0] == '&lt;&lt;'}
					First
				{elseif $pn[0] == '&lt;'}
					Back
				{elseif $pn[0] == '&gt;'}
					Forward
				{elseif $pn[0] == '&gt;&gt;'}
					Last
				{else}
					{$pn[0]}
				{/if}
			</a>
		{/foreach}
	</div>
{/if}
{/strip}