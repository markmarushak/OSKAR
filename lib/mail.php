<?php

function _inutf8($s) 
{
	return '=?UTF-8?B?' . base64_encode($s) . '?=';
}

function sendMail0($to, $subj, $message, $from = '', $fromname = '') 
{
	global $_GS;
	if (!validMail($to) or empty($message)) 
		return false;
	if (!$from) 
		$from = 'support';
	if (!validMail($from)) 
		$from .= '@' . $_GS['domain'];
	if (!validMail($from)) 
		return false;
	$p = '-f' . $from;
	if (!$fromname)
		$fromname = $_GS['site_name'];
	if ($fromname)
		$from = _inutf8($fromname) . " <$from>"; // "Name" <mail@domain.xx>
	return mail($to, _inutf8($subj), $message, 
		'Content-type: text/html; charset="utf-8"' . HS2_NL .
		"From: $from" . HS2_NL .
		"MIME-Version: 1.0" . HS2_NL,
		$p);
}

function sendMail($to, $subj, $message, $from = '', $fromname = '') 
{
	global $_GS;

	if (!$_GS['mail_password'])
		return sendMail0($to, $subj, $message, $from, $fromname);

	if (!validMail($to) or empty($message)) 
		return false;
	if (!$from) 
		$from = 'support';
	if (!validMail($from)) 
		$from .= '@' . $_GS['domain'];
	if (!validMail($from)) 
		return false;
	if (!$fromname)
		$fromname = $_GS['site_name'];
		
	require_once('lib/phpmailer/class.phpmailer.php');
	require_once('lib/phpmailer/class.smtp.php');

	$mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = valueIf($_GS['mail_secure'], "ssl");
	$mail->Host = $_GS['mail_host'];
	$mail->Port = $_GS['mail_port'];

	$mail->Username = $_GS['mail_username'];  // username
	$mail->Password = $_GS['mail_password']; // password

	$mail->From = $from;
	$mail->FromName = $fromname;
	$mail->Subject = $subj;
//	$mail->AltBody = "This is the body when user views in plain text format";
//	$mail->WordWrap = 50; // set word wrap

	$mail->MsgHTML($message);

	$mail->AddReplyTo($from, $fromname);

	$mail->AddAddress($to);

	$mail->IsHTML(true); // send as HTML
	$mail->CharSet = "utf-8";
	$res = $mail->Send();
	if (!$res)
		xAddToLog('PHP-Mailer error: ' . $mail->ErrorInfo);
	return $res;
}

?>