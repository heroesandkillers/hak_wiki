<?php

## The protocol and server name to use in fully-qualified URLs
//$wgServer = "http://en." . $hak_url;

$wgScriptExtension = ".php";

# MySQL specific settings
$wgDBprefix = "wiki_en_";

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

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
$wgLanguageCode = "en";

require_once( "$IP/extensions/Lockdown/Lockdown.php" );

define("NS_CHECKUSER", 100);
$wgExtraNamespaces[NS_CHECKUSER] = "Heroes_and_Killers_Wiki";

//$wgNamespacePermissionLockdown[NS_CHECKUSER]['edit'] = array('ADMINISTRATORS');
//
//$wgNamespacePermissionLockdown[Heroes_and_Killers_Wiki]['edit'] = array('user');
//$wgNonincludableNamespaces[] = Heroes_and_Killers_Wiki;
# allow these pages for anonymous users
$wgWhitelistRead = array("Heroes_and_Killers_Wiki");
# remove the link to the talk page for non-logged in users
$wgShowIPinHeader = false;
