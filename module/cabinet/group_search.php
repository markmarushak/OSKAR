<?php
$_auth = 1;
require_once('module/auth.php');

$stat_game = $db->fetch1Row($db->select('stat_game','user_id, winner, lose','user_id=?', _uid()));
if ($stat_game){
    setPage('stat_game', $stat_game);
}else{
    $db->insert('stat_game',[
        'user_id' => _uid(),
        'winner' => 0,
        'lose' => 0

    ],'','');

    setPage('stat_game', $stat_game = [
        'winner' => 0,
        'lose' => 0
    ]);
}

if ($_POST['coin_as_question']) {
    $_SESSION['groups_main'] = $_POST['name'];
    $coin = $_POST['coin_as_question'];
    $_SESSION['coin_as_money'] = $coin;
    $a = $_POST["name_ru"];
    if (!preg_match('//u', $a)) {
        $a = iconv("cp1251","UTF-8",$a);
    }
     $_SESSION['question'] = findQuestion($_SESSION['groups_main']);


    setPage('avatar', $db->fetch1Row($db->select('Avatar', 'url_img','user_id=?',_uid())));
    setPage('get_bg',$db->fetch1Row($db->select('game_bg','bg','groups=?', $_SESSION['groups_main'])));
    setPage('group',$a);
    setPage('rate', $_SESSION['coin_as_money']);

    setPage('question',  $_SESSION['question']);
    showPage();


}else{
    if ($_POST['data']){

        $data = $_POST['data'];

        $result = [
            'result'      => 1,
            'answer'      => $a = $data["answer"],
            'rate'        => $_SESSION['coin_as_money'],
            'balance'     => (int)$data['balance'],
            'main_answer' => $_SESSION['question']['main']['answer'],
            'count'       => $data['count'],
            'question_g'  => $data['question_g']
        ];
        $win_coin = $result['balance'] + $result['rate'];
        $lost_coin = $result['balance'] - $result['rate'];
        //обработка данных
        if (!preg_match('//u', $a)) {
            $a = iconv("cp1251","UTF-8",$a);
        }

        if ($result['answer'] === $result['main_answer']){
            $winner = (int)$_POST['data']['winner'];
            $winner++;
            $result['balance'] = $win_coin;
            $db->update('stat_game',[
                'winner' => $winner,
                ],'','user_id=?', _uid());
            $result['winner'] = $winner;
            echo json_encode($result);
        }else{
            $db->update('Wallets',['wBal' => $lost_coin], '', 'wuID=?', _uid());
            $result['balance'] = $lost_coin;
            $lose = (int)$_POST['data']['lose'];
            $lose++;
            $db->update('stat_game',[
                'lose' => $lose,
            ],'','user_id=?', _uid());
            $result['lose'] = $lose;
            $result['result'] = 0;
            echo json_encode($result);
        }
    }
}

function findQuestion ($group){
    global $db;
    $findQuestion = $db->fetchRows($db->select('question_answer', 'id,groups ,question, answer', 'groups=?', $group, '', '', ''));
    $fakeAnswer = $db->fetchRows($db->select('question_answer', 'answer', '',''));
        $tmp = 0;
        shuffle($findQuestion);
        shuffle($fakeAnswer);
        foreach ($fakeAnswer as $fake) if ($tmp < 3){
            if ($findQuestion[0]['answer'] !== $fake['answer']) {
                $main_fake[] = $fake;
                $tmp++;
            }
        }
        $main_fake[] = ['answer' => $findQuestion[0]['answer']];
        shuffle($main_fake);
    return [
        'main' => $findQuestion[0],
        'fake' => $main_fake

    ];
}