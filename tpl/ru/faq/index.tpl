{strip}
{include file='header.tpl' title='FAQ'}
	<!-- header -->
	<header class="faq table-section white" id="faq">
		<div class="top-wrap">
			<div class="container ">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<nav class="top-menu" id="top-menu">
							<div class="logo">
								<span></span>
							</div>
							<div class="button_nav_open">
								<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
							</div>
							<ul class="horizontal-menu text-right memu-close-768">
                                {include file='links.el.topmenu.tpl' module='index' text='на главную'}


								<li ><a href="{_link module='udp/rules'}">ПУБЛИЧНАЯ ОФЕРТА</a></li>
                                {*{if _uid()}*}
                                    {*{include file='links.el.topmenu.tpl' module='cabinet' text=$user.aName}*}
                                    {*{include file='links.el.topmenu.tpl' module='cabinet' text='Личный кабинет'}*}
                                    {*{if $curr1}*}
                                        {*{include file='links.element.tpl' module='balance' text='Баланс'}*}
                                        {*{_z($curr1.wBal, $curr1.cID, 2)}*}
                                    {*{/if}*}
                                    {*{include file='links.el.topmenu.tpl' module='account/login' params='out' text='Выход'}*}
                                {*{else}*}
									{*<li> <a data-toggle="modal" data-target="#login">вход</a></li>*}
                                {*{/if}*}
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<div class="vertical-middle main-text">
			<div class="item-text">
				<h1>Вопросы и ответы</h1>
			</div>
			<div class="faq-btn to">
				<a href="#qwest"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
			</div>
		</div>
	</header>


    {if $list}
<div class="table-section" id="qwest">
	<div class="vertical-middle">


		<div class="faq-box text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
	{foreach name=list from=$list key=id item=l}

						<div class="col-md-4">
							<div class="question" style="cursor: pointer;">
								<h3>{$l.fQuestion}</h3>
								<div class=" answer">
									<small>{$l.fCat}</small><br>
                                    {$l.fAnswer}
								</div>
							</div>

						</div>




	{/foreach}
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
	{include file='pl.tpl'}
	<br>
{/if}

<script type="text/javascript">
	$('.answer').hide();
	$('.question').click(
		function()
		{
			$('.answer').slideToggle();
	    }
	);
</script>

{include file='footer.tpl'}
{/strip}