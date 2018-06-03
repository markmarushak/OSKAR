$(document).ready(function () {
    $('.open-img').click(function (event) {
        event.preventDefault();

        var link = $(this).attr('href');

        $('#open_img_veref').show();
        $('#open_img_veref .content_img').show('slow');
        $('#open_img_veref img').attr('src',link);

    });
    $('#open_img_veref').click(function () {
        $(this).hide();
    });

    $('input[name="status"]').change(function () {
        var i_stat = $(this).attr('data-stat');
        filter_block(i_stat);
    });

    $('input[type="checkbox"]').on('click',function () {
        var id = $(this).attr('id');
        var data = {};
        data['change_verf'] = 1;
        data['id'] = id;
        if ($(this).is(':checked')){
            data['stat'] = 1;
        }else {
            data['stat'] = 0;
        }
        $.post(
            '/admin/verefication',
            data,function () {
                setInterval(custom_reload('veref_body'),500);
            }
        );

    });
    $('body').append('<div class="preloader_lottery modal"></div>');
    var preloader = $('.preloader_lottery');


    function filter_block(number) {
        $('tbody.veref_body tr').css({'display':'none'});
        if( number === '3') {
            $('tbody.veref_body tr').css({'display':'table-row'});
        }else {
            $('tbody.veref_body tr[data-stat="'+number+'"]').css({'display':'table-row'});
        }
    }

    function custom_reload(area) {
        preloader.show();
        $.post(window.location.href, {}, function(d) {
            preloader.hide();
            $("#" + area).html($("#" + area, d).html());
        });
    }
});