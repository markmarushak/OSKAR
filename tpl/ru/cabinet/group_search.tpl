{strip}
    {assign var="title" value="Game {$group}"}
    <style>
        body {
            overflow: hidden;
        }
        body::-webkit-scrollbar {
            display: none;
        }
    </style>
    {include file='header.tpl' title=$title}
    <aside id="winner-player" class="modal animated fadeInDown">
        <section>
            <span>
                Поздравляем {$user.uLogin} !!
            </span>
        </section>
    </aside>
    <aside id="lost-player" class="modal animated fadeInDown">
        <section>
            <span>
                Вы проиграли {$user.uLogin} !!
            </span>
        </section>
    </aside>

    <section id="cart_question" class="game-bg">
        <div class="personal-panel animated fadeInDown">
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
                    ставка <span><b>{$rate}</b><i class="far fa-registered"></i></span>
                </div>
            </div>
            <div class="right-panel">
                <div class="avatar-player">
                    <img src="{$avatar.url_img}" alt="">
                </div>
                <div class="cabinet-player">
                    <a href="{_link module='cabinet'}">игровой аккаунт</a>
                </div>
            </div>
        </div>
        <div class="game-panel animated fadeInUp">
            <header class="question-board">
                <span>игра на тему: {$group}</span>
                <hr>
                <p>
                    {$question.main.question}
                </p>
            </header>
            <div class="btn-panel">
                <form method="post" id="game-player">
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

{/strip}