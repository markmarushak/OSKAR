{strip}
    {include file='header.tpl' title='Результат'}
	<link rel="stylesheet" href="assets/lib/animate/animate.css">
	
	
{if $el}
	<div class="result-page case-page white game-bg">
		<div>
			<div class="result-box">
				<div class="section-1">
					<div class="left animated bounceInLeft">победу ведет: <br> {$user.aName}</div>
					<div class="right animated bounceInRight ">
						<header>
								Моя статистика
						</header>
						<div class="stat">
							<div class="left">
								<i class="fas fa-trophy"></i>
								<span>{$stat.winner}</span>
							</div>
							<div class="right">
								<i class="fas fa-trophy"></i>
								<span>{$stat.lose}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="section-2 animated flipInX">
					выигрыш составил: <i class="fas fa-star"></i>{_z($el.pPerc,1)}% = {_z($el.pPerc,1)} <i class="fas fa-registered"></i> 
					<br>
					в <span class="in_curr case"><i class="fas fa-briefcase animated bounce"></i> </span> было {_z(( $el.pPer * $el.pNPer ),1)} часов выигрыша
					<!-- {_z((($el.pPerc*$el.dZ0)/100+$el.dZ0),1)} -->
					
				</div>
				<div class="section-3 text-center animated fadeInUp">
					<p><span class="in_curr case"><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i><i class="fas fa-briefcase animated bounce"></i></span> в выбраном кейсе было  {_z($el.pPerc,1)} <i class="fas fa-registered"></i>  <i class="fas fa-star"></i>{_z($el.pPerc,1)} <i class="fas fa-clock"></i></p>
					<p>при вопросе за {$coin}<i class="fas fa-registered"></i> в игре на тему "{$group}"</p>
					<p>выигрыш будет на вышем счете через {_z(( $el.pPer * $el.pNPer ),1)} часов.</p>
					<p>начисление равными долями каждыее сутки.</p>
					<p>+ КЭШ-БЭК 100% = {_z(($el.pPerc + $coin),1)}</p>

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
        <input form="game-new" type="hidden" name='question' value="{$question}">
		<input form="game-new" type="hidden" name="rate" value="{$rate}">

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
	<script src='assets/js/notBackLoad.js'></script>

{/strip}

