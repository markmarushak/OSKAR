{strip}
    {include file='admin/header.tpl' title='Настройки игры'}
    <style>

        .content {
            position: relative;
            width: 100%;
            height: 100%;
            display: block;
        }

        .main-content {
            top: 0;
        }

        table.table {
            width: 100%;
        }
        table.table tbody tr {
            border-bottom: 1px solid #eee;
            text-align: center;
            background: #333;
            color: #eee;
        }

        table.table tr td,
        table.table tr th
        {
            padding: 15px;
        }
        table.table tr button,
        table.table tr a {
            border: none;
            background: #2196F3;
            padding: 10px 20px;
            display: block;
            text-transform: uppercase;
            color: #f5f5f5;
        }
        #add_check {
            padding: 10px;
            background: #333;
            color: #eee;
        }
        #add_check select,
        #add_check button,
        #add_check a,
        #add_check input {
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            margin: 5px 4px;
        }

        #add_check select,
        #add_check a,
        #add_check button {
            height: 35px;
        }

    </style>
    <div class="content">
        <header>
            <h3>
                Группа и ее фон
            </h3>
        </header>
        <div class="main-content">
            <table class="table list-game-pic">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Гуппа</th>
                    <th>Фон</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$list key=k item=i}
                    <tr>
                        <form class="upload" method="post">
                            <input type="hidden" name="upload" value="upload">
                            <td class="answ"><span>{$i.id}</span><input type="hidden" name="id" value="{$i.id}"></td>
                            <td class="answ"><input type="text" name="groups" value="{$i.groups}"></td>
                            <td class="answ"><input type="text" name="background" value="{$i.bg}"></td>
                            <td><a href="{$i.bg}" target="_blank">посмотреть</a></td>
                            <td><button value="{$i.id}">Изменить</button></td>
                        </form>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    {include file='admin/footer.tpl'}
    <script src="assets\lib\jquery\jquery.min.js"></script>
    <script src="assets/js/game-player.js"></script>
{/strip}