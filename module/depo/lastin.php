<?php
require_once('module/auth.php');
setPage('list', $db->fetchIDRows($db->select('Opers LEFT JOIN Users ON uID=ouID', 'oID, uLogin, ocID, oSum, oBatch', 'oOper=? and oState=3', array('CASHIN'), 'oID desc', 10), false, 'oID'));
showPage(); ?>