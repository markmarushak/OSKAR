$(document).ready(function () {
    $('#random_form').submit(function(event){
        event.preventDefault();
        var send = $.post(
            '/rand_onload',
            $('#random_form').serialize()
        );
        if (send){
            $('#blok-info-rand').load(document.URL +  ' #blok-info-rand');
        }else {
            alert('функция не сработала');
        }
    });
});