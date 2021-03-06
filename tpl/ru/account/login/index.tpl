{strip}
	<link rel="stylesheet" href="assets/css/account.css">
{include file='header.tpl' title='Вход'}
	<body class="accounts">
	<!-- <a class="to_home" href="/home">На главную</a> -->

	<div class="text-center logins table-section overflow-hidden cosmo_log">
		<div class="vertical-middle">

<h1 class="sign__word">Вход</h1>

{if isset($smarty.get.ip_changed)}

	<h2>Система безопасности</h2>
	<p class="info">
		Вы пытаетесь войти в аккаунт с другого IP-адреса.<br>
		Для продолжения <a href="{_link module='confirm'}">введите код подтверждения</a><br>
		или перейдите по ссылке, которые были высланы на Ваш e-mail
	</p>

{elseif isset($smarty.get.brute_force)}

	<h2>Система безопасности</h2>
	<p class="info">
		До этого пароль был неверно введен несколько раз подряд.<br>
		Для продолжения <a href="{_link module='confirm'}">введите код подтверждения</a><br>
		или перейдите по ссылке, которые были высланы на Ваш e-mail
	</p>

{else}


	{if $_cfg.Sys_LockSite}
		<p class="info">
			В настоящее время на сайте идут технические работы.<br>
			Вход <b>только</b> для обслуживающего персонала
		</p>
	{/if}
	
	{include file='account/login/box.tpl'}

	{if !$_cfg.Sys_LockSite}
		<div class="chekc-footer">
			<br>
			<a href="{_link module='account/reset_pass'}">Забыл пароль</a><br>
            {if $_cfg.Account_RegMode >= 0}<a href="{_link module='account/register'}">Еще нет логина</a><br>{/if}
			<a href="{_link module='confirm'}">Подтвердить</a> или <a href="{_link module='account/change_mail'}">сменить</a> e-mail
			<br>
		</div>
	{/if}

{/if}

		</div>
	</div>

{include file='footer.tpl'}
{/strip}