{strip}
    {include file="header.tpl"}
    <div class="text-center logins table-section overflow-hidden">
    <div class="vertical-middle">
    {if $_cfg.Account_Loginza}
        {include file='account/loginza/box.small.tpl'}
        <br>
        <h3>или</h3>
    {/if}
    {$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'Логин')}
    {include file='edit.my.tpl'
    url="{_link module='account/login/login'}"
    form='login_frm1'
    fields=
    [
    'Login'=>
    [
    'T',
    "$txt_login!!",
    [
    'login_empty'=>"укажите $txt_login/Пароль",
    'login_not_found'=>"неверная пара $txt_login/Пароль",
    'not_active'=>'e-mail аккаунта не подтвержден',
    'banned'=>"доступ в аккаунт приостановлен до $ban_date",
    'blocked'=>'аккаунт заблокирован'
    ]
    ],
    'Pass'=>
    [
    '*',
    'Пароль!!',
    [
    ]
    ],
    'Remember'=>
    [
    'CC',
    'Запомнить',
    [
    ]
    ],
    'URL'=>
    $url
    ]
    captcha=$_cfg.Account_LoginCaptcha
    btn_text='Войти'
    }

    </div>
    </div>

{include file="footer.tpl"}
{/strip}