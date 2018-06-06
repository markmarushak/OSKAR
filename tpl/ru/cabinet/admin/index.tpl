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
        table.table tr button {
            border: none;
            background: #2196F3;
            height: 35px;
            padding: 0 20px;
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
        #add_check input {
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            margin: 5px 4px;
            color: #333;
        }
        
        #add_check select,
        #add_check button {
            height: 35px;
        }

        select,
        button,
        input {
            color: #333;
        }

    </style>
    <div id="chenge" class="modals">
        <section>
            <form id="add_check">
                <table>
                    <h2> Добавить</h2>
                    <tr>
                        <td class="id">
                            <input type="hidden" name="id" value="{($last_id.id)+1}">
                        </td>
                        <td class="gr_ru">
                            <h5>Гуппа на русском</h5>
                            <select name="group_ru" id="group_ru">
                                <option data-val="0" value="0">Выберите группу</option>
                                <option data-val="avto_thnick" value="Автомобили и техника">Автомобили и техника</option>
                                <option data-val="alcoholic" value="Алкогольные напитки">Алкогольные напитки</option>
                                <option data-val="question_right" value="Вопросы права">Вопросы права</option>
                                <option data-val="easy_task" value="Легкие математические задачи">Легкие математические задачи</option>
                                <option data-val="history" value="История">История</option>
                                <option data-val="literature" value="Литература">Литература</option>
                                <option data-val="great_inventions" value="Великие изобретения">Великие изобретения</option>
                                <option data-val="fasion" value="Мир моды">Мир моды</option>
                                <option data-val="art" value="ИССКУСТВО И МУЗЫКА">ИССКУСТВО И МУЗЫКА</option>
                                <option data-val="nature" value="Природа">Природа</option>
                            </select>
                        </td>
                        <td class="add-groups">
                            <h5>Ключ группы</h5>
                            <input type="text" name="groups">
                        </td>
                        <td class="ques">
                            <h5>Вопрос</h5>
                            <input type="text" name="question" value="">
                        </td>
                        <td class="answ">
                            <h5>Ответ</h5>
                            <input type="text" name="answer" value="">
                        </td>
                        <td>
                            <br>
                            <button>Добавить</button>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </div>
    <div class="content">
        <header>
            <h3>
                Список вопросов и ответов
            </h3>
        </header>
        <div class="main-content">
            <table class="table list-game-pic">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Гуппа</th>
                        <th>ключ группы</th>
                        <th>вопрос</th>
                        <th>ответ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {foreach from=$list key=k item=i}
                    <tr>
                        <form method="post">
                            <td class="id"><span>{$i.id}</span><input type="hidden" name="id" value="{$i.id}"></td>
                            <td class="gr_ru"><input type="text" name="group_ru" value="{$i.group_ru}"></td>
                            <td class="gr"><input type="text" name="groups" value="{$i.groups}"></td>
                            <td class="ques"><input type="text" name="question" value="{$i.question}"></td>
                            <td class="answ"><input type="text" name="answer" value="{$i.answer}"></td>
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
    <script>
        $('select[name="group_ru"]').change(function (event) {
           $('td.add-groups input').val('');
           var sel = $(this).find('option:selected').attr('data-val');
            $('td.add-groups input').val(sel);
        });
        $('.list-game-pic form').submit(function (event) {
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: 'post',
                url: '/game-setting-onload',
                data: data
            }).done(function (data) {
                var result = JSON.parse(data);
                console.log(result);
                if (result.out === '1'){
                    alert('успех');
                    $(this).load('/game-setting', $(this));
                }else if (result.out === '0') {
                    alert('неудача');
                }

            });
        });

        $('#add_check').submit(function (event) {
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: 'post',
                url: '/game-add-check',
                data: data
            }).done(function (data) {
                var result = JSON.parse(data);
                console.log(result);
                if (result.out === '1'){
                    alert('успех');
                    location.reload();

                }else if (result.out === '0') {
                    alert('неудача');
                }

            });
        });
    </script>
{/strip}