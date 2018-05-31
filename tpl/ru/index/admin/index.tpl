{strip}
    {include file='admin/header.tpl' title='Настройка главной'}
    <link rel="stylesheet" href="assets/lib/bootstrap/bootstrap.min.css">
    <style>
        table td {
            overflow: auto;
        }
    </style>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>редакция</td>
            <td>id</td>
            <td>секция</td>
            <td>контент</td>
        </tr>

        {foreach from=$list key=k item=i}
            <tr>
                <td>
                    <a href="{_link module='index/admin/upload'}?id={$i.id}">
                        изменить cекцию
                    </a></td>
                <td>
                    {$i.id}

                </td>
                <td>
                    {$i.name}

                </td>
                <td>{$i.content|html_entity_decode}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    {include file='admin/footer.tpl'}
{/strip}