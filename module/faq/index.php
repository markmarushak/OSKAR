<?php

require_once('module/auth.php');
require_once('lib.php');

$table = 'FAQ';
$id_field = 'fID';

try
{

} 
catch (Exception $e) 
{
}


$n = $_cfg['FAQ_ShowCount'];
if (!$n)
	$n = 10;
$list = opPageGet(_GETN('page'), $n, $table, '*', 'fHidden=0', array(),
	array(
		'fOrder' => array('fCat, fOrder, fID')
	),
	'', $id_field
);

setPage ('grup', filterList($table));
setPage('list', $list, 1);

showPage();

?>