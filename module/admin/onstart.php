<?php

global $self_category, $admin_modules;
$self_category = '';
$admin_modules = array();
foreach ($_rwlinks as $m => $r)
    if ($r['admin'])
    {
        if (!is_string($r['admin']))
            $r['admin'] = $m;
        if (!$r['category'])
        {
            $s = explode('/', $r['admin'], 2);
            if ($s[1])
            {
                $r['category'] = $s[0];
                $r['admin'] = $s[1];
            }
        }
        prepVal($r['category'], 3);
        prepVal($r['admin'], 3);
        if ($m == $_GS['module'])
            $self_category = $r['category'];
        if ($r['admin'] != '-')
            $admin_modules[$r['category']][$r['admin']] = $m;
    }

setPage('up_category', $self_category);
setPage('up_modules', $admin_modules[$self_category]);

clearstatcache();
setPage('needupdatedb', ($_cfg['Const_DBVer'] != @filemtime('_dbstru.php')));

?>