<?php
	if($_POST['subject'])
	{
        $to  = "markk.9964@gmail.com" ;

        $subject = $_POST['subject'];
        $message = $_POST['body'];

        $headers .= "Content-type: text/html; charset=utf-8";
        $headers .='From: ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>';
        $send = mail($to, $subject, $message, $headers);
		if($send){
            echo "Отправка удачна!";
        }
        else{
            echo "Отправка неудачна!";
        }
	}
?>
