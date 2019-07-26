<?php
    // require_once('module/auth.php');

    require_once('paykassa_sci.class.php'); //подключаем класс для работы с SCI, скачать можно по ссылке


    if(!empty($_POST))
    {
        $amount = $_POST['amount'];
        $system = $_POST['pay-system'];
        $currency = $_POST['currency'];
        $order_id = 'shop_'. rand(1000000, 9999999);
        $comment = $_POST['comment'];   
    }

    

    $paykassa_merchant_id = '2605';
    $paykassa_merchant_password = 'jsdJemeCkkOqJIh';

    

    $paykassa = new PayKassaSCI( 
        $paykassa_merchant_id,       // идентификатор магазина
        $paykassa_merchant_password  // пароль магазина
    );

    $system_id = [
        "payeer"            => 1,  // поддерживаемая валюта RUB USD
        "perfectmoney"      => 2,  // поддерживаемая валюта USD
        "advcash"           => 4,  // поддерживаемая валюта RUB USD
        "berty"             => 7,  // поддерживаемая валюта RUB USD
        "bitcoin"           => 11, // поддерживаемая валюта BTC
        "ethereum"          => 12, // поддерживаемая валюта ETH
        "litecoin"          => 14, // поддерживаемая валюта LTC
        "dogecoin"          => 15, // поддерживаемая валюта DOGE
        "dash"              => 16, // поддерживаемая валюта DASH
        "bitcoincash"       => 18, // поддерживаемая валюта BCH
        "zcash"             => 19, // поддерживаемая валюта ZEC
        "monero"            => 20, // поддерживаемая валюта XMR
        "ethereumclassic"   => 21, // поддерживаемая валюта ETC
        "ripple"            => 22, // поддерживаемая валюта XRP
        "neo"               => 23, // поддерживаемая валюта NEO
        "gas"               => 24, // поддерживаемая валюта GAS
        "bitcoinsv"         => 25, // поддерживаемая валюта BSV
    ];

   if(!empty($_POST))
   {
     $res = $paykassa->sci_create_order(
        $amount,    // обязательный параметр, сумма платежа, пример: 1.0433
        $currency,  // обязательный параметр, валюта, пример: BTC
        $order_id,  // обязательный параметр, уникальный числовой идентификатор платежа в вашей системе, пример: 150800
        $comment,   // обязательный параметр, текстовый комментарй платежа, пример: Заказ услуги #150800
        $system_id[$system] // обязательный параметр, указав его Вас минуя мерчант переадресует на платежную систему, пример: 12 - Ethereum
    );
   }

    if ($res['error']) {        // $res['error'] - true если ошибка
        echo $res['message'];   // $res['message'] - текст сообщения об ошибке
        //действия в случае ошибки
    } else {
        //  формирование формы платежа
        echo $res["data"]["url"];
    }

    
