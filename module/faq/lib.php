<?php

function faqGetBlock($n = 0)
{
	global $db, $_cfg;
	if ($n <= 0)
		$n = exValue(1, $_cfg['FAQ_InBlock']);
	$list = $db->fetchIDRows($db->select('FAQ', '*', 'fHidden=0', array(), 'RAND()', $n), false, 'fID');
	return $list;
}

function getGroup($table)
{
    global $db;
    $groups = $db->fetchRows($db->select($table,'fCat', '',''));
    foreach ($groups as $group)
    {
        $gloal_array[] = $group['fCat'];
    }
    $gloal_array = array_unique($gloal_array);

    return $gloal_array;
}

function filterList($table)
{
    global $db;
    $global_array = getGroup($table);
    foreach ($global_array as $lists)
    {
        $list[$lists] = ($db->fetchRows($db->select($table,'fID, fQuestion, fAnswer','fCat=?',$lists)));

    }

    return $list;
}

?>