{strip}

<style>


</style>

<link rel="stylesheet" href="assets/css/baunti.css">
{include file='header.tpl' title='Баунти - система'}
<body class="baunti-bg text-center">
	<div class="top-wrap" id="top-wrap">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 col-sm-10">
					<nav class="top-menu" id="top-menu">
						<div class="button_nav_open">
							<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
						</div>
						<ul class="horizontal-menu text-right memu-close-768">
							<li><a href="{_link module='balance'}"><i class="fab fa-btc"></i>&nbsp; Финансы / Вывод / Пополнение</a></li>
							<li><a href="{_link module='account'}"><i class="fas fa-cog"></i>&nbsp; настройки</a></li>
							<li><a href="{_link module='cabinet'}"><span class="door"><img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-968.gif"></span> игровой аккаунт</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- <img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-1167.gif"> -->
	<div class="sign">
		<h1 class="sign__word">Баунти </h1>
	</div>
	<section class="baunti-flex">
		<div class="list-player">
			<span><i class="fas fa-clipboard-list"></i></span>
			<header>
				<h3>Список рефералов</h3>
			</header>
			<table class="table text-center">
				<tr>
					<th>Приглашенные</th>
					<th>Дата ренистрации</th>
					<th>Вклады</th>
					<th>Рефские</th>
				</tr>
                {foreach from=$refs.0.users key=k item=i}
					<tr>
						<td>{$i.uLogin}</td>
						<td>{$i.aCTS}</td>
						<td>{if $i.ZDepo}{$i.ZDepo}{else}0{/if}</td>
						<td>{if $i.ZRef}{$i.ZRef}{else}0{/if}</td>
					</tr>
                {/foreach}
			</table>
		</div>
		<div class="baunti-data">
			<span><i class="fas fa-link"></i></span>
			<header>
				<h3>Реферальная ссылка </h3>
			</header>
			<br>
			<p>С каждого приглашенного вы получите 10% от их Кэш-Бека</p>
			<h3>{$refurl}</h3>
		</div>
	</section>
	{*<div class="table-section baunti">*}
		{*<div class="header-section">*}
			{*<div class="header-box" style="min-height:200px">*}
				{*<h1 class="text-center uppercase">Моя баунти ссылка</h1>*}
        {*<h1 class="text-center uppercase">10% РЕФБЕК</h1>*}
				{*<br>*}
				{*<h2>{$refurl}</h2>*}
			{*</div>*}
		{*</div>*}
		{*<div class="footer-section">*}
      {*<div class ="tttt" style="background-image: url(../assets/img/vozvrat.jpg); min-height:200px;  background-repeat: no-repeat; width:11%; margin:0 auto;" ></div>*}
			{*<ul class="depo_btn">*}
				{*{include file='links.el.topmenu.tpl' module='cabinet' text='Личный кабинет'}*}
			{*</ul>*}
		{*</div>*}
	{*</div>*}


	{*{include file='edit.tpl'*}
		{*fields=[*}
			{*'RefLogin'=>*}
				{*[*}
					{*'X',*}
					{*'Вас пригласил',*}
					{*0,*}
					{*$reflogin,*}
					{*'skip'=>!$reflogin*}
				{*],*}
			{*'RefURL'=>*}
				{*[*}
					{*'',*}
					{*'Ваша Баунти &nbsp;',*}
					{*0,*}
					{*"<a href=\"{$refurl}\" target=\"_blank\">{$refurl}</a>"*}
				{*],*}
			{*'Refs'=>*}
				{*[*}
					{*'U',*}
					{*'refsys/_refs.tpl',*}
					{*'skip'=>!$refs*}
				{*]*}
		{*]*}
		{*btn_text='ok'*}
	{*}*}

{include file='footer.tpl'}
{/strip}