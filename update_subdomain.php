<?php

$sub = $argv[1]; //$argv gets commandline arguements
// set domain name
//$_SERVER['SERVER_NAME'] = 'localhost/hak_wiki/index.php/' . $sub . '/';

$_SERVER['REQUEST_URI'] = 'localhost/hak_wiki/index.php/' . $sub . '/';

echo '--------------------------------------
Running update.php for localhost/hak_wiki/index.php/' . $sub . '/
--------------------------------------
';
include("maintenance/update.php");

//include("maintenance/doMaintenance.php");

//$name = "Heroes_and_Killers";
//$dbprefix = "$sub . _";
//
//$dbname = "hakwiki";
//$dbuser = "hak";
//$dbpass = "&MOVy1PV";
//
//$lang = " . $sub . ";

//include("maintenance/clearInterwikiCache.php");
//include("maintenance/rebuildall.php");
//include("maintenance/install.php Heroes_and_Killers trollderiu'");