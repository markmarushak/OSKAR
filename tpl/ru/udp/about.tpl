{strip}
    {include file="header.tpl"}
    <div class="header-box text-center">
        <h1>Операции</h1>
    <div class="out-chat history-btn">
        <a href="cabinet"><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
    </div>
    {if $list}

        {include file='balance/_statuses.tpl'}

        {include file='list.tpl'
        title=' '
        url='*'
        fields=[
        'oTS'=>['Дата'],
        'oCID'=>['Плат.система'],
        'oSum1'=>['Приход'],
        'oSum2'=>['Расход'],
        'oBatch'=>['Batch-номер'],
        'oState'=>['Статус'],
        'oMemo'=>['Примечание']
        ]
        values=$list
        row='*'
        }

    {/if}

    {include file='footer.tpl'}

{/strip}