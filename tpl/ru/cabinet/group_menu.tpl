{strip}
    {include file='header.tpl' title='Меню категорий'}
        <div class="back-cabinet">
            <a href="{_link module='cabinet'}"><i class="fas fa-door-closed"></i> вернутся в игровой аккаунт</a>
        </div>
        <aside id="change-amount_question" class="modal animated fadeInDown">
            <section>
                <header>
                    <h3>
                    </h3>
                </header>
                <div class="content">
                    <form id="form-amount_question" name="form-amount_question" action="{_link module='cabinet/group_search'}" method="post" target="_blank">
                        <div class="modal-group">
                            <label for="">Назначьте стоимость вопроса <i class="far fa-registered"></i></label>
                            <span>
                                <input name="coin_as_question" type="number" min="1" max="{$max_rate.pMax}" value="120" >
                                <input type="hidden" name="balance" value="{$curr1.wBal}">
                            </span>
                            <input type="hidden" name="name">
                            <input type="hidden" name="name_ru">
                        </div>
                        <div class="modal-submit">
                            <input class="send-amount_question" name="submit" type="submit" value="назначить">
                            <input class="cancel-amount_question" type="submit" value="отменить">
                        </div>
                    </form>
                </div>
            </section>
        </aside>

        <section id="group-menu">
            <div class="group-row">
                <div data-group="avto_thnick" data-name="Автомобили и техника" class="group-item">
                    <div class="group-block">
                        <i class="fab fa-medapps"></i>
                        <span>Автомобили и техника</span>
                    </div>
                </div>
                <div data-group="alcoholic" data-name="Алкогольные напитки" class="group-item">
                    <div class="group-block">
                        <i class="fas fa-coins"></i>
                        <span>Алкогольные напитки</span>
                    </div>
                </div>
                <div data-group="question_right" data-name="Вопросы права" class="group-item">
                    <div class="group-block">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Вопросы права</span>
                    </div>
                </div>
                <div data-group="easy_task" data-name="Легкие математические задачи" class="group-item">
                    <div class="group-block">
                        <i class="fab fa-connectdevelop"></i>
                        <span>Легкие математические задачи</span>
                    </div>
                </div>
                <div data-group="history" data-name="История" class="group-item">
                    <div class="group-block">
                        <i class="fas fa-user-clock"></i>
                        <span>История</span>
                    </div>
                </div>
            </div>
            <div class="group-row">
                <div data-group="literature" data-name="Литуратура" class="group-item">
                    <div class="group-block">
                        <i class="fas fa-book"></i>
                        <span>Литуратура</span>
                    </div>
                </div>
                <div data-group="great_inventions" data-name="Великие изобретения" class="group-item">
                    <div class="group-block">
                        <i class="fas fa-film"></i>
                        <span>Великие изобретения</span>
                    </div>
                </div>
                <div data-group="fasion" data-name="Мир моды" class="group-item">
                    <div class="group-block">
                        <i class="fab fa-gratipay"></i>
                        <span>Мир моды</span>
                    </div>
                </div>
                <div data-group="art" data-name="ИССКУСТВО И МУЗЫКА" class="group-item">
                    <div class="group-block">
                        <i class="far fa-star"></i>
                        <span>ИССКУСТВО И МУЗЫКА</span>
                    </div>
                </div>
                <div data-group="nature" data-name="Природа" class="group-item">
                    <div class="group-block">
                        <i class="fab fa-docker"></i>
                        <span>Природа</span>
                    </div>
                </div>
            </div>
        </section>

    {include file='footer.tpl'}
    <script type="text/javascript">
        $(document).ready(function () {
            var input = $('form input[name="coin_as_question"]');
            var balance = parseInt($('form input[name="balance"]').val());
            var coin    = parseInt(input.val());
            var main_from = $('form');
            var form = $('form input[name="coin_as_question"], .modal-group span');

            input.keyup(test());
            main_from.submit(test());
                function test() {
                $('.send-amount_question').click(function (event) {
                    if (input.val() >= {$curr1.wBal}) {
                        event.preventDefault();
                    }

                    setTimeout(function () {
                        if ({$curr1.wBal} > input.val()){
                            if (form.has('error')) {
                                form.removeClass('error');
                                form.addClass('good');
                                console.log('good');
                                return $('#form-amount_question').submit();
                            }
                        }
                        else {
                            if (form.has('good')) {
                                form.removeClass('good');
                                form.addClass('error');
                                console.log('error');
                            }
                        }
                    },100);
                });
            }

        });
    </script>

{/strip}