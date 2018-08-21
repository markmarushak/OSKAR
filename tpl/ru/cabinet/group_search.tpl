{strip}
    {assign var="title" value="Game {$group}"}
    <style>
        body {
            overflow: hidden;
        }
        body::-webkit-scrollbar {
            display: none;
        }

        .attention {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0,0,0,.9);
            z-index: 21;
            text-align: center;
        }
        .attention section {
            background: #650000c9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 25px 0px #ff0000;
            border: 1px solid #ff0000;
            color: gold;
        }
        .attention .block h3 {
            border-bottom: 1px solid;
            font-size: 29px;
            letter-spacing: 4px;
            padding: 0 30px;
        }
        .attention .block h5 {
            line-height: 2.5;
            font-size: 18px;
        }
        .close-ok button {
            display: block;
            width: 100%;
            background: #FFEB3B;
            border: none;
            padding: 10px;
            border-radius: 5px;
            color: #333;
            letter-spacing: 5px;
        }
        
    </style>
    {include file='header.tpl' title=$title}

    <div id="attention" class="attention">
        <section class=" animated fadeInDown">
            <div class="block">
                <h3>
                    ATTENTION!
                </h3>
                <h5>
                    ИГРА НАЧАЛАСЬ <br>
                    ПРАВИЛО ГЛАСИТ: <br>
                    ВЫБРАТЬ ВЕРНЫЙ ВАРИЙАНТ <br>
                    ДЛЯ СЛЕДУЮЩЕГО ХОДА
                </h5>
            </div>
            <div class="close-ok">
                <button type="submit" class="close_modal" data-target='attention'>OK</button>
            </div>
        </section>
    </div>

    <aside id="winner-player" class="modal">
        <section class="animated fadeInDown">
        </section>
    </aside>
    <aside id="lost-player" class="modal">
        <section class="animated fadeInDown">
        </section>
    </aside>

    <section id="cart_question" class="game-bg">
        <!-- <div class="personal-panel animated fadeInDown">
            <div class="left-panel">
                <div class="nick-name">
                    <i class="fas fa-user-graduate"></i>
                    <span>{$user.uLogin}</span>
                </div>
                <div class="count-game">
                    <div class="winning">
                        <i class="fas fa-trophy"></i>
                        <span id="winning">{$stat_game.winner}</span>
                    </div>
                    <div class="defeat">
                        <i class="fas fa-trophy"></i>
                        <span id="defeat">{if $stat_game.lose}{$stat_game.lose}{else}{$_POST.wBall}{/if}</span>
                    </div>
                </div>
                <div class="game-balance">
                    <i class="fas fa-money-bill-alt"></i> <span id="game-balance">
                        {if $balance_main}{$balance_main}m{else}{$curr1.wBal}{/if} <i class="far fa-registered"></i></span>
                </div>
                <div class="game-rate">
                    ставка <span><b id="rate">{$rate}</b><i class="far fa-registered"></i></span>
                </div>
            </div>
            <div class="right-panel">
                <div class="avatar-player">
                    <img src="{$avatar.url_img}" alt="">
                </div>
            </div>
        </div> -->
        <div class="personal-panel animated fadeInDown">
            <div class="container">
                <div class="row row-middle">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6 item">
                                <h4>Ставка</h4>
                                <div class="game-rate">
                                    <span><b id="rate">{$rate}</b><i class="far fa-registered"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 item item-last">
                                <h4>Статистика</h4>
                                <div class="count-game">
                                    <div class="winning">
                                        <i class="fas fa-trophy"></i>
                                        <span id="winning">{$stat_game.winner}</span>
                                    </div>
                                    <div class="lose">
                                        <i class="fas fa-trophy"></i>
                                        <span id="defeat">{if $stat_game.lose}{$stat_game.lose}{else}{$_POST.wBall}{/if}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 text-align">
                        <div class="avatar-player">
                            <img src="{$avatar.url_img}" alt="">
                            <div class="nick-name item">
                                <span>{$user.uLogin}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <h4>Баланс</h4>
                        <div class="game-balance">
                            <i class="fas fa-money-bill-alt"></i> <span id="game-balance">
                                {if $balance_main}{$balance_main}m{else}{$curr1.wBal}{/if} <i class="far fa-registered"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="game-panel animated fadeInUp">
            <header class="question-board">
                <span>игра на тему: <span id="group_q">{$group}</span></span>
                <hr>
                <p>
                    {$question.main.question}
                </p>
            </header>
            <div class="btn-panel">
                <form id="game-player">
                    <input type="hidden" name="idPlayer" value="{$user.uID}">
                    <div class="btn-row">
                        {foreach from=$question.fake key=k item=i}
                            <div class="item-panel">
                                <input id="answer_{$k}" type="radio" name="answer" value="{$i.answer}">
                                <label for="answer_{$k}">{$i.answer}</label>
                            </div>
                        {/foreach}
                    </div>
                    <div class="btn-submit">
                        <input type="submit" value="Ответить">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <input class="get_game-bg" type="hidden" value="{$get_bg.bg}">
    {include file='footer.tpl'}
    <script src="assets/js/game-player.js?={$rand_css}"></script>
    <script src="assets/js/game-bg.js"></script>
    <script src="assets/js/notBackLoad.js"></script>

{/strip}