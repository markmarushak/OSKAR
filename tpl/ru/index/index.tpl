{strip}
    {include file='header.tpl'}
    <style>
        #video-bg {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            z-index: 1;
            background-size: cover;
        }

        #video-bg > video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }

        @supports (object-fit: cover) {
            #video-bg > video {
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }
    </style>
    <section id="info">
        <div class="top">
            <div class="block">
                <ul>
                    <li><i class="far fa-money-bill-alt"></i> Пополни игровой баланс <i class="far fa-registered"></i></li>
                    <li><i class="fas fa-th"></i> Выбери категорию</li>
                    <li><i class="fas fa-clipboard-check"></i> Ответь на простой 2 + 2 = 4 вопрос</li>
                    <li><i class="fas fa-briefcase"></i> Открой кейс</li>
                </ul>
            </div>
        </div>
        <div class="center">

        </div>
        <div class="bottom">
            <ul>
                <li>
                    <i class="fas fa-suitcase"></i> В каждом кейсе гарантированный приз
                </li>
                <li>
                    <i class="fas fa-exclamation-circle"></i> Акция! от 7% до 2000%!!
                </li>
                <li>
                    <i class="fas fa-hand-holding-usd"></i> Кэш-Бэк 100%
                </li>
                <li>
                    <i class="fas fa-trophy"></i> На счет + Вигрыш
                </li>
            </ul>
        </div>
    </section>
    <div id="video-bg">
        <video src="{$video_path}bg.mp4" width="100%" height="auto" />
    </div>
    {include file='footer.tpl'}
{/strip}