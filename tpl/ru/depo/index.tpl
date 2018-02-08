{strip}
{include file='header.tpl' title='Депозиты'}

<h1>Депозиты</h1>

{include file='depo/_statuses.tpl'}

{if $list}

	{include file='list.tpl' 
		url='*'
		fields=[
			'dID'=>['ID'],
			'dCTS'=>['Дата начала'],
			'cName'=>['Плат.система'],
			'dZD'=>['Сумма'],
			'pName'=>['План'],
			'dLTS'=>['Посл.начисление'],
			'dN'=>['Начислений'],
			'dZP'=>['<small>Начислено</small>'],
			'dNTS'=>['След.начисление'],
			'dState'=>['Статус']
		]
		values=$list
		row='*'
	}

{else}

	У Вас <b>нет вкладов</b>
	<br>
	<br>
	
{/if}
<div class="table-section baunti">
 <div class="item-button-top">
<a href="{_link module='depo/depo'}?add" class="green-button">Сделать вклад</a>
                 </div>
                 
  <div class="item-button-top">
     <!-- <ul class="depo_btn">  -->
      <a href="{_link module='cabinet'}" class="green-button">Личный кабинет</a>
      
                
			</div>
      
{include file='footer.tpl'}
{/strip}