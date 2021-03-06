{strip}
    {include file='header.tpl' title='Аккаунт'}
    <link rel="stylesheet" href="/assets/css/account.css">
    <body class="settings">
<div class="text-center">

    {if $_cfg.Sec_ForceReConfig and $user.aNeedReConfig}
        <p class="info">
            Перед началом работы Вы должны задать свои личные параметры
        </p>
    {/if}


    {include file='edit.my.tpl'
    url='*'
    title1='Параметры'
    class='text-center'
    fields=
    [
    'aName'=>
    [
    'T',
    'Ваше имя!!',
    [
    'name_empty'=>'укажите имя'
    ],
    'readonly'=>$_cfg.Account_LockData,
    'skip'=>($_cfg.Account_UseName == 0)
    ],
    'uLogin'=>
    [
    'X',
    'Ваш логин',
    0,
    'skip'=>$_cfg.Const_NoLogins
    ],
    'uMail'=>
    [
    'X',
    'Ваш e-mail'
    ],
    'aTel'=>
    [
    'T',
    'Ваш номер телефона!! <<с кодом страны>>',
    [
    'tel_wrong'=>'неверный номер'
    ],
    'skip'=>!$_cfg.SMS_REG
    ],
    'TZ'=>
    [
    'T',
    'Ваш часовой пояс!! <<от GMT>>',
    [
    'tz_wrong'=>'неверное смещение [ч:м]'
    ],
    'comment'=>'+4:00 = Москва',
    default=>$utz,
    'size'=>6
    ],
    'aNoMail'=>
    [
    'C',
    'Не получать оповещения на e-mail',
    'skip'=>$_cfg.Msg_NoMail
    ],
    99 =>'',
    'aIPSec'=>
    [
    'S',
    'Контроль смены IP-адреса',
    0,
    [
    0=>'- по умолчанию -',
    1=>'x.0.0.0',
    2=>'x.x.0.0',
    3=>'x.x.x.0',
    4=>'x.x.x.x'
    ]
    ],
    'aSessIP'=>['C', 'Привязывать сессию к IP-адресу'],
    'aSessUniq'=>['C', 'Запретить параллельные сессии'],
    'aTimeOut'=>['I', 'Автовыход через N минут <<0 - по умолчанию>>'],
    'aSQuestion'=>
    [
    'T',
    'Контрольный вопрос!!',
    [
    'secq_empty'=>'укажите вопрос',
    'secq_short'=>"вопрос слишком короткий [не менее {$_cfg.Sec_MinSQA}]"
    ],
    'skip'=>($_cfg.Sec_MinSQA == 0),
    'size'=>40
    ],
    'aSAnswer'=>
    [
    '*',
    'Контрольный ответ <<заполните чтобы сменить>>',
    [
    'seca_empty'=>'укажите ответ',
    'seca_short'=>"ответ слишком короткий [не менее {$_cfg.Sec_MinSQA}]",
    'seqa_equal_secq'=>'ответ не может совпадать с вопросом'
    ],
    'skip'=>($_cfg.Sec_MinSQA == 0),
    'size'=>40
    ],
    'PIN'=>
    [
    '*',
    'Введите PIN-код!! <<чтобы подтвердить изменения>>',
    [
    'pin_wrong'=>'неверный код'
    ],
        'skip'=>($_cfg.Sec_MinPIN == 0),
        'size'=>8
        ]
    ]
    btn_text=' '
    }
</div>


<ul class="account_bottom-lists">
    <li>
        <a href="" class="modal-open btn btn-info" data-target="modal_add-avatar">добавить аватар</a>
    </li>
    <li>
        <a href="" class="modal-open btn btn-info" data-target="modal_pasport">ВЕРИФИЦИРОВАТЬ аккаунт</a>
    </li>
    {if !($_cfg.Sec_ForceReConfig and $user.aNeedReConfig)}
        {if $_cfg.Account_Loginza}
            <li><a href="{_link module='account/loginza'}" class="button-gray">Профили</a></li>{/if}
        {if !$_cfg.Account_LockData}
            <li><a href="{_link module='account/change_mail'}" class="btn btn-info">Сменить e-mail</a></li>{/if}
        <li><a href="{_link module='account/change_pass'}" class="btn btn-info">Сменить пароль</a></li>
    {/if}
    <li><a class="btn btn-success " href="{_link module='cabinet'}">вернуться <span class="settings-ico">
        <img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-1496.gif">
    </span></a></li>
    <li><button class="btn btn-primary" form="account_setting" name="account_frm_btn" value="Сохранить" type="submit">Сохранить<span class="settings-ico"><img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-1468.gif"></span></button></li>
</ul>

<aside id="modal_add-avatar" class="modal add_load_file">
    <section class=" animated fadeInDown">
        <header class="text-center">
            <h3>Аватарка</h3>
        </header>
        <div class="file_cont">
            <label for="file_ava"><i class="fas fa-cloud-download-alt"></i> Выберите файл</label>
            <input id="file_ava" type="file" multiple="multiple" accept=".txt,image/*">
        </div>
        <a href="#" class="upload_files button">Загрузить файлы</a>
        <a href="#" class="close_modal" data-target="modal_add-avatar">закрыть</a>
        <div class="ajax-reply"></div>
    </section>
</aside>
<aside id="modal_pasport" class="modal add_load_file">
    <section class=" animated fadeInDown">
        <header class="text-center">
            <h3>Верификация</h3>
        </header>
        <div class="file_cont">
            <label for="file_pasport"><i class="fas fa-cloud-download-alt"></i> Выберите файл</label>
            <input id="file_pasport" type="file" multiple="multiple" accept=".txt,image/*">
        </div>
        <a href="#" class="pasport_up_files button">Загрузить файлы</a>
        <a href="#" class="close_modal" data-target="modal_pasport">закрыть</a>

        <div class="ajax-reply"></div>

    </section>
</aside>
{include file='footer.tpl'}
<script>
    $(document).ready(function () {
        $('form[name="account_frm"]').attr('id','account_setting');

        var files;

        $('input[type=file]').on('change', function () {
            files = this.files;
        });

        $('.close_modal').click(function (event) {
            $('.ajax-reply').html('');
        });

        $('a.upload_files').click(function (event) {
            event.preventDefault();

            event.stopPropagation();

            if (typeof files === 'undefined') return;

            var data = new FormData();

            $.each(files, function (key, value) {
                data.append(key, value);
            });

            data.append('my_file_upload', 1);

            $.ajax({
                url: '/file_load',
                type: 'POST',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (respond, status, jqXHR) {

                    if (typeof respond.error === 'undefined') {
                        var files_path = respond.files;
                        var html = '';
                        $.each(files_path, function (key, val) {
                            html += val + '<br>';
                        });

                        $('.ajax-reply').html(html);
                    }
                    else {
                        console.log('ОШИБКА: ' + respond.error);
                    }
                },
                error: function (jqXHR, status, errorThrown) {
                    console.log('ОШИБКА AJAX запроса: ' + status, jqXHR);
                }

            });

        });

        $('a.pasport_up_files').click(function (event) {
            event.preventDefault();

            event.stopPropagation();

            if (typeof files === 'undefined') return;

            var data = new FormData();

            $.each(files, function (key, value) {
                data.append(key, value);
            });

            data.append('pasport_file_upload', 1);

            $.ajax({
                url: '/file_load',
                type: 'POST',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (respond, status, jqXHR) {

                    if (typeof respond.error === 'undefined') {
                        var files_path = respond.files;
                        var html = '';
                        $.each(files_path, function (key, val) {
                            html += val + '<br>';
                        });

                        $('.ajax-reply').html(html);
                    }
                    else {
                        console.log('ОШИБКА: ' + respond.error);
                    }
                },
                error: function (jqXHR, status, errorThrown) {
                    console.log('ОШИБКА AJAX запроса: ' + status, jqXHR);
                }

            });

        });
    });
</script>
{/strip}