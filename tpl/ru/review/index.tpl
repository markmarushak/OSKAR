{strip}
{include file='header.tpl' title='Чат'}
<div class="table-section chat overflow-hidden">
	<div class="header-section">
		<div class="header-chat">
			<h1>Онлайн Чат</h1>
			<div class="out-chat">
				<a href="cabinet"><i class="fa fa-home" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	<div class="vertical-middle">
{if isset($smarty.get.awating)}

	<h2>Ваш отзыв успешно добавлен!</h2>
	<p class="info">
		Администратор проверит его в ближайшее время
	</p>

{else}

	{if $list}
		<div class="chat-box">
		<table class="formatTable chat">
		{foreach name=list from=$list key=id item=l}
			<tr>
				<td class="chat-block">
					<ul>
						<li class="name-chat"><span>{$l.uLogin}</span>
						<p>{$l.oText|nl2br}</p></li>
						<li class="text-chat"></li>
						{*<li class="date-chat"><small>{$l.oTS}</small></li>*}
					</ul>
				</td>
			</tr>
		{/foreach}
		</table>
		</div>

        {include file='pl.tpl'}
		<br>
	{else}
		- Нет записей -
	{/if}
	</div>
	<div class="footer-section overflow-hidden">
	{if _uid()}
		{include file='edit.tpl'
			title='Участвуйте в чате'
			fields=
			[
				'Text'=>
					[
						'W',
						valueIf($_cfg.Review_Mode, 'Текст <<проверяется>>', ''),
						[
							'text_empty'=>'укажите текст'
						],
						'size'=>5
					]
			]
			btn_text='Добавить'
		}
	{/if}
	</div>

{/if}
</div>
{include file='footer.tpl'}
{/strip}