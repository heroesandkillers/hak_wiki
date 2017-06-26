<?php

## The protocol and server name to use in fully-qualified URLs
//$wgServer = "http://es." . $hak_url;

#$wgScriptExtension = ".php/es";
$wgScriptExtension = ".php";

# MySQL specific settings
$wgDBprefix = "wiki_es_";

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "es_ES.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;
## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";
# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "es";

//$wgGroupPermissions['REGISTERED']['edit'] = false;
