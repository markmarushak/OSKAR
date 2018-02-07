<?php

require_once('module/auth.php');

try
{

	if (isset($_GET['out']))
	{
		if (!_uid())
			goToURL(moduleToLink('index'));
		opLoginOut(_GET('out'));
		showInfo('LogOut');
	}

	if (sendedForm('', 'login_frm1'))
	{
		checkFormSecurity('login_frm1');

		setError($uid = opLoginPrepare(_IN('Login'), _IN('Pass')), 'login_frm1');
		setError(opLogin($uid, _IN('URL'), false, false, _IN('Remember')), 'login_frm1');
		showInfo('*Error');
	}

}
catch (Exception $e)
{
}

setPage('url', urldecode(_RQ('url')));

// loginza
$_SESSION['_go_after_login'] = _RQ('url');
setPage('loginza_url', urlencode(fullURL(moduleToLink('account/loginza'))));

showPage();
