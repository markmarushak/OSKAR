{strip}
{*
	table_class: class for table
	fields: array(
		[row_class] class for table row
	)
	values:
*}

{foreach from=$fields key=f item=v}
	{if is_array($v) and !$v.skip and ($v[0] == 'Y')}
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		{break}
	{/if}
{/foreach}

	{foreach from=$fields key=f item=v}
	{if is_int($f)}						{*** SECTION ***}
	<div class="col-sm-12 form-group text-center namepays">
				<a name="{$v}"></a>
				{if $v}- {$v} -{/if}
	</div>
	{elseif !(is_array($v) and $v.skip)}
		<div class="form-group col-md-10 col-md-push-1">

	{$vv = _arr_val($values, $f)}
		{if is_array($v) and $v[0]}				{*** VISIBLE ***}
				{include file='edit.row.my.tpl'}
		{else}
		{*** HIDDEN ***}
			<input name="{$f}" id="{$edit_form_name}_{$f}" value="{if is_array($v)}{$vv}{else}{$v}{/if}" type="hidden">
		{/if}
		</div>

    {/if}
	{/foreach}

{/strip}