<?php
$sub = $argv[1]; //$argv gets commandline arguements
 echo "OOOOOOLAAAAAAAAAAA = $sub";
// set domain name
$_SERVER['SERVER_NAME'] = 'localhost/hak_wiki/index.php/' . $sub;
 
echo '--------------------------------------
Running update.php for localhost/' . $sub . '
--------------------------------------
';
include("maintenance/update.php");