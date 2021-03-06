$(document).ready(function() {

    function open_modal() {
        $('a.modal-open').click(function (event) {
            event.preventDefault();
            var link = $(this).attr('data-target');
            $('#'+link).show();
        });
    }
    open_modal();

    function close_modal() {
        $('.close_modal').click(function (event) {
            event.preventDefault();
            var link = $(this).attr('data-target');
            $('#'+link).hide();
        });
    }
    close_modal();

    // group-menu
    $('#group-menu .group-item').click(function (event) {
        var name_group = $(this).attr('data-name');
        var name_g = $(this).attr('data-group');
        var modal = $('#change-amount_question');
        var close = modal.find('input.cancel-amount_question');
        if (modal.is(':hidden')){
            modal.removeClass('fadeOutUp');
            modal.addClass('fadeInDown');
            modal.show(1);
        }
        modal.find('h3').text(name_group);
        modal.find('input[name="name"]').val(name_g);
        modal.find('input[name="name_ru"]').val(name_group);
        close.click(function (event) {
            event.preventDefault();
            modal.removeClass('fadeInDown');
            modal.addClass('fadeOutUp');
            $('#change-amount_question .content .modal-group span, input[name="coin_as_question"]').removeClass();
            setTimeout(function () {
                modal.hide()
            },1000);

        });

    });


    if (!$('form[name=register_frm1]').is(':visible')) {
        $('.bgimg-4').css({
            'background': '#909090',
            'background-images': 'none'
        });
    }

    $("button[name='balance/wallets_frm_btn']").parent().removeClass('col-md-offset-1');
    $("#oper form[name='add']").attr('target', '_blank');
    $('.ind').parent().parent().find('.oper-fot-btn').css({
        'top': 0,
        'right': '-20%',
        'padding-top': '2.5%'
    });
    $('.ind').parent().parent().parent().removeClass('overflow-hidden');

    if ($(window).width() < 1025) {
        $('.button_nav_open a').click(function (event) {
            event.preventDefault();
            if($('.horizontal-menu').is(':visible')){
                $('.avatar').css({'visibility':'visible'});
            }else {
                $('.avatar').css({'visibility':'hidden'});
            }
            if ($('.memu-close-768').is(':visible')) {
                $('.button_nav_open').removeClass('menu-close');
                $('.memu-close-768').slideUp(400);
                $('.button_nav_open a').html('<i class="fa fa-bars" aria-hidden="true"></i>');
                setTimeout(function () {
                    $('#top-wrap')
                        .removeClass('open')
                        .css({'background': 'none'});
                }, 399);
            } else {
                $('#top-wrap').addClass('open').css({'background': 'rgba(0,0,0,.8)'});
                $('.memu-close-768').slideDown(800);
                $('.button_nav_open').addClass('menu-close');
                $('.button_nav_open a').html('<i class="fa fa-times" aria-hidden="true"></i>');
            }
        });



    }

    $('.oper form > .form-group:nth-child(4) div,.oper form > .form-group:nth-child(5) div').removeClass('col-sm-6').addClass('col-sm-4')

    $('#register_frm1_Agree').next().removeClass('col-sm-3').addClass('col-sm-8')

    //faq

    function openQuestion() {
       $('ul#list li ul li a').click(function (event) {
            event.preventDefault();
            $(this).next('.wrap_parent').toggleClass('wrap_open');
        });
    }
    openQuestion();

    function closeQuestion() {

       $('.wrap_parent a').click(function (event) {
            event.preventDefault();
            $('.wrap_parent').removeClass('wrap_open');
        });
    }
    closeQuestion();



    //faq end


    $(".to-depo").on("click", "a", function () {
        var id = $(this).attr('href'), top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 2300);
    });
    $("#to-top").on("click", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'), top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 2300);
    });

    function err() {
        if ($('span.err').is(':visible')) {
            $('#depo-add').addClass('has-error');
        } else {
            $('#depo-add').removeClass('has-error');
        }
    }

    err();
    $('ul.gold li a').hover(function () {
        $('span.room').toggleClass('room-in');
    });

    if ($(window).width() <= 425) {
        $('.ind').parent().parent().find('.oper-fot-btn').css({
            'top': "0",
            'right': '0',
            'left': '0',
            'padding-top': '2.5%'
        });
    }
    $(window).scroll(function (event) {
        if ($(this).scrollTop() > 650) {
            $('#to-top').show(600);
            $('#to-top').css({
                'position': 'fixed',
                'display': 'block'
            });
        } else {
            $('#to-top').hide();
        }
    });




});