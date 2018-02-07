{strip}
{if $list}
	{if $_cfg.Review_InBlock == 1}
		{$l = reset($list)}
		<div>
			<h3>{$l.uLogin}</h3>
			<div>
				<small>{$l.oTS}</small><br>
				{$l.oText|nl2br|truncate:40}
			</div>
		</div>
	{else}
		{foreach name=list from=$list key=id item=l}
			<div>
				<h3>{$l.uLogin}</h3>
				<div>
					<small>{$l.oTS}</small><br>
					{$l.oText|nl2br|truncate:40}
				</div>
			</div>
		{/foreach}
	{/if}
{/if}
{/strip}