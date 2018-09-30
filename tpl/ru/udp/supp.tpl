{strip}
    {include file='header.tpl' title='Поддержка'}
    <a class="to_home" href="/home">На главную</a>
    <section class="table-section section section-color2" style="background-color: #0088cc;color: #fff;"
             id="contact">

        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="row boots">
                    <div class="helper_head"><i class="fab fa-telegram-plane"></i></div>
                    <h3>Поддержка</h3>
                    <p>24/7 &bull; 365</p>
                </div>
                <div class="row contacts-wrap">

                    <div class="col-md-12">
                        <form action="mailer" method="post" class="mail-form">
                            <div class="form-group double">
                                <div class="col-md-6 col-sm-12">
                                    <input name="firstname" type="text" class="form-control" placeholder="Имя"
                                           data-validation="required" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input name="email" type="text" class="form-control" placeholder="Почта"
                                           data-validation="email" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" placeholder="Тема"
                                       data-validation="required" required>
                            </div>
                            <div class="form-group">
                                <textarea name="body" class="form-control" rows="4" placeholder="Сообщение. . ."
                                          data-validation="required" required></textarea>
                            </div>

                            <input type="submit" class="btn btn-green contact-button" value="Отправить">
                        </form>
                    </div>
                </div>
                <div class="row contacts">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phone">
                            <span>+7 (495) 177-26-54</span>
                            <br>
                            <b>Мы перезвоним Вам в ближайшее время</b>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="email">
                            <span>administrator@2017grand-lottery2018.org</span><br>
                            <b>Мы ответим Вам в ближайшее время</b>

                        </div>
                    </div>
                </div>

            </div>


        </div>

    </section>
    {include file='footer.tpl'}
{/strip}