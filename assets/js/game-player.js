$(document).ready(function () {
    var count = 1;
    var game = $('#game-player').submit(function (event) {
        event.preventDefault();
        var balance = parseInt($('.game-balance span').text()),
            player_id = parseInt($('input[name]').val()),
            answer = $('input:checked').val(),
            winner = $('.winning span').text(),
            lose = $('.defeat span').text(),
            question_g = $('#group_q').text(),
            rate = $('#rate').text();

                    var data =  ({
            'answer'   : answer,
            'balance'  : balance,
            'player_id': player_id,
            'winner'   : winner,
            'lose'     : lose,
            'count'    : count,
            'question_g' : question_g,
            'rate'     : rate
        });
        var send = $.ajax({
            type: 'POST',
            url: '/group_search',
            data: {data:data}
        }).done(function (data) {
            var result = JSON.parse(data);
            if (result.result === 1) {
                slideResultPlayer($('#winner-player'));
                setTimeout(function () {
                    $(location).attr('href','/deposit?add&question='+result.question_g+'&rate='+result.rate);
                },3100);
                $('#game-balance').html(result.balance);
                $('#winning').html(result.winner);
            } else {
                slideResultPlayer($('#lost-player'));
                $('#game-balance').html(result.balance);
                $('#defeat').html(result.lose);
            }
        });
    count++;
    if(count === 3){
        setTimeout(function () {
            $(location).attr('href','/cabinet');

        },4000)
    }
    });

    $('form.upload').submit(function (event) {
        event.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            type: 'post',
            url: '/game-bg-onload',
            data: data
        }).done(function (data) {
            var result = JSON.parse(data);
            if (result.out === '1'){
                alert('успех');
            }else if (result.out === '0') {
                alert('неудача');
            }

        });
    });


    function slideResultPlayer(winner_and_lost) {
        setTimeout(function () {
            winner_and_lost.show();
        },10);
        setTimeout(function () {
            winner_and_lost.removeClass('fadeInDown').addClass('fadeOutUp');
        },1880);
        setTimeout(function () {
            winner_and_lost.hide();
            winner_and_lost.removeClass('fadeOutUp').addClass('fadeInDown');
        },2500);
    }

});

