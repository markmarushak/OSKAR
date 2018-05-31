{strip}
	<link rel="stylesheet" href="assets/lib/animate/animate.css">


{if $el}
    {include file='header.tpl' title='Результат'}
	<div class="result-page case-page white game-bg">
		<div>
			<div class="result-box">
				<div class="section-1">
					<div class="left animated bounceInLeft">победу ведет: {$user.aName}</div>
					<div class="right animated bounceInRight ">выигрыш составил: {_z((($el.dZ0 + $el.pPerc)), $el.dcID, 1)}</div>
				</div>
				<div class="section-2 animated flipInX">
					<header>
						<h2>
							Моя статистика
						</h2>
					</header>
					<div class="stat">
						<div class="left">
							<i class="fas fa-trophy"></i>
							<span>1</span>
						</div>
						<div class="right">
							<i class="fas fa-trophy"></i>
							<sapn>5</sapn>
						</div>
					</div>
				</div>
				<div class="section-3 text-center animated fadeInUp">
					<p>ВЫИГРЫШ ВЫПЛАТИТСЯ ЗА {($el.pPer * $el.pNPer)} ЧАСА РАВНЫМИ ЧАСТЯМИ</p>
					<p>КЭШ БЭК 100% ЧЕРЕЗ 72 ЧАСА!</p>
				</div>
				<div class="section-4">
					<div class="btn-result animated fadeInUp">
						<i class="fas fa-door-open"></i>
						<a href="{_link module='cabinet/group_menu'}">вернутся в игровой аккаунт</a>
					</div>
				</div>
			</div>
		</div>
	</div>
{else}
    {include file='header.tpl' title='Кейсы'}
	<aside id="case-player" class=" modal animated fadeInLeft">
		<div class="container">
			<header>
				<h2>
				</h2>
			</header>
			<div class="row">
				<div class="col-md-3">
					<div class="img-box">
						<button form="game-new" name="new_btn" value="Создать" type="submit"><i class="fas fa-briefcase"></i></button>
					</div>
				</div>
				<div class="col-md-3">
					<div class="img-box">
						<button form="game-new" name="new_btn" value="Создать" type="submit"><i class="fas fa-briefcase"></i></button>
					</div>
				</div>
				<div class="col-md-3">
					<div class="img-box">
						<button form="game-new" name="new_btn" value="Создать" type="submit"><i class="fas fa-briefcase"></i></button>
					</div>
				</div>
				<div class="col-md-3">
					<div class="img-box">
						<button form="game-new" name="new_btn" value="Создать" type="submit"><i class="fas fa-briefcase"></i></button>
					</div>
				</div>
			</div>
		</div>
	</aside>
	<div class="table-section case-page game-bg" >
	<div class="header-section">

	</div>
	<div class="vertical-middle">
		<div class="header-box">
			<h1 class="text-center uppercase">Выберите кейс с бонусом!</h1>
			<br>
		</div>

        {include file='depo/_depo.new.tpl'}

	</div>
	<div class="footer-section"></div>
	</div>
{/if}
	<input class="get_game-bg" type="hidden" value="{$get_bg.bg}">

{include file='footer.tpl'}
	<script>
        setTimeout(function () {
            $('#case-player').show();
        }, 100);
        $('form').hide();
        $('#new_Sum').val({$coin});
        $('#new_Sum').attr('type', 'hidden');
        $('form').attr('id', 'game-new');
	</script>
	<script src="assets/js/game-bg.js"></script>

{/strip}

