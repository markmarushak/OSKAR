{strip}
{include file='header.tpl' title='Баунти - система'}


	<div class="table-section baunti">
		<div class="header-section">
			<div class="header-box" style="min-height:200px">
				<h1 class="text-center uppercase">Моя баунти ссылка</h1>
        <h1 class="text-center uppercase">10% РЕФБЕК</h1>
				<br>
				<span class="no-uppercase">
						"<a href=\"{$refurl}\" target=\"_blank\">{$refurl}</a>"

					</span>

			</div>
		</div>
		<div class="footer-section">
      <div class ="tttt" style="background-image: url(../assets/img/vozvrat.jpg); min-height:200px;  background-repeat: no-repeat; width:11%; margin:0 auto;" ></div>
			<ul class="depo_btn">
                {if _uid()}
                    {include file='links.el.topmenu.tpl' module='cabinet' text='Личный кабинет'}

                {/if}
			</ul>
		</div>
	</div>
	
<div class="text-center">
{if _uid()}

	{include file='edit.tpl'
		fields=[
			'RefLogin'=>
				[
					'X',
					'Вас пригласил',
					0,
					$reflogin,
					'skip'=>!$reflogin
				],
			'RefURL'=>
				[
					'',
					'Ваша Баунти &nbsp;',
					0,
					"<a href=\"{$refurl}\" target=\"_blank\">{$refurl}</a>"
				],
			'Refs'=>
				[
					'U',
					'refsys/_refs.tpl',
					'skip'=>!$refs
				]
		]
		btn_text=' '
	}

	{if $_cfg.Account_RegMode == 3}
	
		<h2>Инвайты</h2>
		
	{/if}
	
{/if}
</div>

{include file='footer.tpl'}
{/strip}