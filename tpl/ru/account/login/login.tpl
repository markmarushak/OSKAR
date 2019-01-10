{strip}
    {include file="header.tpl" title="Авторизация"}
    <a class="to_home" href="/home">На главную</a>

    <div class="text-center logins table-section overflow-hidden cosmo_log reset-pass">
        <div class="vertical-middle">
        <h1 class="sign__word">Вход</h1>

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

            {if !$_cfg.Sys_LockSite}
                <div class="chekc-footer">
                    <br>
                    <a href="{_link module='account/reset_pass'}">Забыл пароль</a><br>
                    {if $_cfg.Account_RegMode >= 0}<a href="{_link module='account/register'}">Еще нет логина</a><br>{/if}
                    <a href="{_link module='confirm'}">Подтвердить</a> или <a href="{_link module='account/change_mail'}">сменить</a> e-mail
                    <br>
                </div>
            {/if}
    </div>
    </div>

{include file="footer.tpl"}
{/strip}