{strip}
    {include file='admin/header.tpl' title='Настройки игры'}

    <style>

    </style>
    <h1>Подтверждение личных данных</h1>

    <div class="filter">
        <form action="">
            <ul>
                <li><input data-stat="1" type="radio" name="status" id="status-1"><label for="status-1">подтвержденные</label></li>/
                <li><input data-stat="2" type="radio" name="status" id="status-2"><label for="status-2">не подтвержденные</label></li>/
                <li><input data-stat="3" type="radio" name="status" id="status-3" checked><label for="status-3">все</label></li>
            </ul>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>photo</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody id="veref_body" class="veref_body">
            {foreach from=$list key=k item=i}
                <tr data-stat="{if $i.status === '1'}{$i.status}{else}2{/if}">
                    <td>{$i.user_id}</td>
                    <td><a class="open-img" href="{$i.url_img}"><i class="fas fa-external-link-alt"></i> проверить</a></td>
                    <td>
                        <label for="{$i.user_id}"><i class="fas fa-pen-square"></i> </label>
                        <input type="checkbox" name="stat" id="{$i.user_id}" {if $i.status === '1'}checked{/if}>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>

    <aside id="open_img_veref" class="modal">
        <div class="content_img modal">
            <div class="block">
                <img src="" alt="">
            </div>
        </div>
    </aside>

    {include file='admin/footer.tpl'}
    <script src="assets\lib\jquery\jquery.min.js"></script>
    <script src="assets/js/verefication.js"></script>
{/strip}