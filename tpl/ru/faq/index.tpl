{strip}
{include file='header.tpl' title='FAQ'}
	<style>
		.wrap {
			background: url(assets/img/faq.gif);
			-webkit-background-size: cover;
			background-size: cover;
			width: 100%;
			height: 100%;
			position: relative;
		}
		.wrap::after {
			content: '';
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: #00000077;
		}
		.wrap > * {
			position: relative;
			color: #fff;
			z-index: 1;
		}
		#list {
			padding: 0;
			list-style-type: none;
		}
		#list li > h3 {
			display: inline-block;
			border-bottom: 1px solid;
			padding: 0 20px;
			text-transform: uppercase;
		}
		.wrap_parent {
			width: 100%;
			height: 100%;
			position: fixed;
			display: none;
			background: rgba(0,0,0,.8);
			top: 0;
			left: 0;
			z-index: 9999999;
		}
		.wrap_table {
			width: 100%;
			height: 100%;
			display: table;
			position: absolute;
		}
		.wrap_cell {
			display: table-cell;
			text-align: center;
			vertical-align: middle;
		}
		.wrap_block {
			display: inline-block;
			width: 50%;
			height: auto;
			background: #eee;
			padding: 20px;
			overflow-y: scroll;
			color: #333;
		}
		.wrap_parent.wrap_open {
			display: block;
		}
		.list-faq {
			padding: 0;
			padding-left: 2em;
		}
		.list-faq li {
			margin: 0;
			padding: 0;
		}
		.list-faq a {
			color: #fff;
			transition: all .5s;
			display: inline-block;
			padding: 5px 10px;
		}
		.list-faq a:hover {
			text-decoration: none;
			background: #333;
		}

		@media screen and (max-width: 1024px) {
			.wrap_block {
				width:;
			}
		}

		#top-menu ul li a {
			color: #fff;
		}
		.text-q {
			overflow-y: scroll;
			max-height: calc(100vh - 30%);
		}
		.text-q::-webkit-scrollbar {
			width: 7px;
		}
		.text-q::-webkit-scrollbar-track {
			background: #0000FF66;
		}
		.text-q::-webkit-scrollbar-thumb {
			background: #000fff99;
		}
	</style>
	<!-- header -->
	<div class="wrap">
		
	<div class="container text-center">
		<div class="col-md-12">
			<div class="top-wrap">

				<nav class="top-menu" id="top-menu">
					<div class="logo">
						<span></span>
					</div>
					<div class="button_nav_open">
						<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
					<ul class="horizontal-menu text-right memu-close-768" style="padding: 0;">
                       <li>
						   <a href="/home">на главную</a>
					   </li>
					</ul>
				</nav>
			</div>
		</div>
		<h2>
			FAQ
			<hr>
			ВОПРОСЫ И ОТВЕТЫ
		</h2>
	</div>

	<div class="container text-q">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<ul id="list" class="row">
                    {foreach from=$grup key=k item=i}
						<li class="col-md-6">
                            {assign var="groups" value=$k}
							<h3>{$groups}</h3>
							<ul class="list-faq">
                                {foreach from=$i item=ie}
									<li>
										<a href="#" data-toggle="modal" data-target="#answer">{$ie.fQuestion}</a>
										<div class="wrap_parent">
											<div class="wrap_table">
												<div class="wrap_cell">
													<div class="wrap_block">
														<header>
															<h4>{$groups}</h4>
															<hr>
														</header>
														<div class="content">
															<h4 class="text-left">{$ie.fQuestion}</h4>
															<p>{$ie.fAnswer}</p>
														</div>
														<footer>
															<a href="#" class="btn btn-warning" >close</a>
														</footer>
													</div>
												</div>
											</div>
										</div>
									</li>
                                {/foreach}
							</ul>
						</li>
                    {/foreach}
				</ul>
			</div>
		</div>
	</div>
	</div>

{include file='footer.tpl'}
{/strip}