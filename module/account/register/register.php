<?php

require_once('module/auth.php');

try 
{

	if (sendedForm('', 'register_frm1'))
	{
		checkFormSecurity('register_frm1');

		setError($nuid = opRegisterPrepare($_IN), 'register_frm1');
		if ($nuid > 1)
			if ($_cfg['Account_RegConfirm'])
			{
				useLib('confirm');
				if ($_cfg['SMS_REG'])
				{
					$tel = _IN('aTel');
					if (opConfirmPrepareSMS($nuid, 'REG', array('tel' => $tel), '', $tel))
						showInfo('Saved', moduleToLink('account/register/register') . '?need_confirm_sms');
				}
				$mail = _IN('uMail');
				if (opConfirmPrepare($nuid, 'REG', array('mail' => $mail), '', $mail))
					showInfo('Saved', moduleToLink('account/register/register') . '?need_confirm');
			} 
			elseif (opRegisterComplete($nuid))
				showInfo('Completed', moduleToLink('cabinet'));


		showInfo('*Error');
	}

}
catch (Exception $e) 
{
}

setPage('valid_ref', _SESSION('_ref'));

// loginza
$_SESSION['_go_after_login'] = '';
setPage('loginza_url', urlencode(fullURL(moduleToLink('account/loginza'))));

showPage();

?>