<?php

require_once("$IP/extensions/TopTenPages.php");

$wgDisableCookieCheck = true;
$wgAllowExternalImages = true;

$hak_url = $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];

# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings
# Protect against web entry
if (!defined('MEDIAWIKI')) {
    exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Heroes and Killers";
$wgMetaNamespace = "Heroes_and_Killers";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL

$wgScriptPath = "/hak_wiki";
$wgArticlePath = "/wiki/$1";

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "/wiki/skins/common/images/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@localhost";
$wgPasswordSender = "apache@localhost";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "hak";
$wgDBuser = "hak";
$wgDBpassword = "&MOVy1PV";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=MyISAM, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";
# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = false;

$wgSecretKey = "a5f6de4b0c435c5dabd578f7aa768ad8324713a4b638e32eff2ff77544e37908";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "efd4b1fadc1528ee1";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# End of automatically generated settings.
# Add more configuration options below.
$wgFavicon = "$wgScriptPath/iWiki.ico";

$wgShowExceptionDetails = true;


$wgSharedDB = 'hak'; # The $wgDBname for the wiki database holding the main user table
$wgSharedPrefix = 'wiki_'; # The $wgDBprefix for the database. Defaults to the prefix of the current wiki if not specified
//$wgCookieDomain = '.' . $hak_url; //También funciona pero me ha dado problemas!
$wgCookieDomain = '.heroesandkillers.com';

$wgSharedTables[] = 'archive';
$wgSharedTables[] = 'category';
$wgSharedTables[] = 'categorylinks';
$wgSharedTables[] = 'change_tag';
//$wgSharedTables[] = 'en_page'; 
//$wgSharedTables[] = 'es_page'; 
$wgSharedTables[] = 'externallinks';
$wgSharedTables[] = 'external_user';
$wgSharedTables[] = 'filearchive';
$wgSharedTables[] = 'hitcounter';
$wgSharedTables[] = 'image';
$wgSharedTables[] = 'imagelinks';
$wgSharedTables[] = 'interwiki';
$wgSharedTables[] = 'interwiki';
$wgSharedTables[] = 'ipblocks';
$wgSharedTables[] = 'iwlinks';
$wgSharedTables[] = 'job';
$wgSharedTables[] = 'l10n_cache';
$wgSharedTables[] = 'langlinks';
$wgSharedTables[] = 'logging';
$wgSharedTables[] = 'log_search';
$wgSharedTables[] = 'module_deps';
$wgSharedTables[] = 'msg_resource';
$wgSharedTables[] = 'msg_resource_links';
$wgSharedTables[] = 'objectcache';
$wgSharedTables[] = 'oldimage';
$wgSharedTables[] = 'pagelinks';
$wgSharedTables[] = 'page_props';
$wgSharedTables[] = 'page_restrictions';
$wgSharedTables[] = 'protected_titles';
$wgSharedTables[] = 'querycache';
$wgSharedTables[] = 'querycachetwo';
$wgSharedTables[] = 'querycachetwo_info';
$wgSharedTables[] = 'recentchanges';
$wgSharedTables[] = 'redirect';
$wgSharedTables[] = 'revision';
$wgSharedTables[] = 'searchindex';
$wgSharedTables[] = 'sites';
$wgSharedTables[] = 'site_identifiers';
$wgSharedTables[] = 'site_stats';
$wgSharedTables[] = 'tag_summary';
$wgSharedTables[] = 'templatelinks';
$wgSharedTables[] = 'text';
$wgSharedTables[] = 'transcache';
$wgSharedTables[] = 'updatelog';
$wgSharedTables[] = 'uploadstash';
$wgSharedTables[] = 'user';
$wgSharedTables[] = 'user_former_groups';
$wgSharedTables[] = 'user_groups';
$wgSharedTables[] = 'user_newtalk';
$wgSharedTables[] = 'user_properties';
$wgSharedTables[] = 'valid_tag';
$wgSharedTables[] = 'watchlist';

//// PHPBB User Database Plugin. (Requires MySQL Database)
//    require_once './extensions/Auth_phpBB.php';
//
//
//$wgAuth_Config = array(); // Clean.
//
//$wgAuth_Config['WikiGroupName'] = array('NEWLY_REGISTERED', 'REGISTERED', 'REGISTERED_COPPA', 'GLOBAL_MODERATORS', 'ADMINISTRATORS');
//// Name of your PHPBB group
//// users need to be a member
//// of to use the wiki. (i.e. wiki)
//// This can also be set to an array 
//// of group names to use more then 
//// one. (ie. 
//// $wgAuth_Config['WikiGroupName'][] = 'Wiki';
//// $wgAuth_Config['WikiGroupName'][] = 'Wiki2';
//// or
//// $wgAuth_Config['WikiGroupName'] = array('Wiki', 'Wiki2');
//// )
//
//$wgAuth_Config['UseWikiGroup'] = true;          // This tells the Plugin to require
//// a user to be a member of the above
//// phpBB group. (ie. wiki) Setting
//// this to false will let any phpBB
//// user edit the wiki.
//
//$wgAuth_Config['UseExtDatabase'] = true;       // This tells the plugin that the phpBB tables
//// are in a different database then the wiki.
//// The default settings is false.
//
//$wgAuth_Config['MySQL_Host'] = 'localhost';      // phpBB MySQL Host Name.
//$wgAuth_Config['MySQL_Username'] = 'hak';       // phpBB MySQL Username.
//$wgAuth_Config['MySQL_Password'] = '&MOVy1PV';       // phpBB MySQL Password.
//$wgAuth_Config['MySQL_Database'] = 'hak';       // phpBB MySQL Database Name.
//
//$wgAuth_Config['UserTB'] = 'phpbb_users';       // Name of your PHPBB user table. (i.e. phpbb_users)
//$wgAuth_Config['GroupsTB'] = 'phpbb_groups';      // Name of your PHPBB groups table. (i.e. phpbb_groups)
//$wgAuth_Config['User_GroupTB'] = 'phpbb_user_group';  // Name of your PHPBB user_group table. (i.e. phpbb_user_group)
//$wgAuth_Config['PathToPHPBB'] = '../forum/';         // Path from this file to your phpBB install. Must end with '/'.
//// Local
//$wgAuth_Config['LoginMessage'] = '<b>You need a phpBB account to login.</b><br /><a href="' . $wgAuth_Config['PathToPHPBB'] .
//        'ucp.php?mode=register">Click here to create an account.</a>'; // Localize this message.
//$wgAuth_Config['NoWikiError'] = 'You are not a member of the required phpBB group.'; // Localize this message.
//
//$wgAuth = new Auth_phpBB($wgAuth_Config);     // Auth_phpBB Plugin.


//SINGLE SIGN ON
$wgPhpbbSSO_Forum_Location = './../forum/';

//Using your absolute server path to this would be better; trailing slash required - e.g. /home/user/www/forum/   
require_once("$IP/extensions/phpbSSO/phpbSSO.php");
$wgAuth = new Auth_remoteuser();
 
function noLoginLogOUt(&$list) {
        unset( $list['Userlogout'] );
        unset( $list['Userlogin'] );
        return true;
}
 
$wgHooks['SpecialPage_initList'][]='noLoginLogOUt';
//SINGLE SIGN ON


require_once( "$IP/extensions/Interwiki/Interwiki.php" );
$wgGroupPermissions['ADMINISTRATORS']['interwiki'] = true;


# Disable for everyone.
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['createtalk'] = false;
$wgGroupPermissions['*']['writeapi'] = false;

// Implicit group for all logged-in accounts
$wgGroupPermissions['NEWLY_REGISTERED']['move'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['move-subpages'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['move-rootuserpages'] = true; // can move root userpages
$wgGroupPermissions['NEWLY_REGISTERED']['read'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['edit'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['createpage'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['createtalk'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['writeapi'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['upload'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['reupload'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['reupload-shared'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['minoredit'] = true;
$wgGroupPermissions['NEWLY_REGISTERED']['purge'] = true; // can use ?action=purge without clicking "ok"
$wgGroupPermissions['NEWLY_REGISTERED']['sendemail'] = true;

$wgGroupPermissions['REGISTERED']['move'] = true;
$wgGroupPermissions['REGISTERED']['move-subpages'] = true;
$wgGroupPermissions['REGISTERED']['move-rootuserpages'] = true; // can move root userpages
$wgGroupPermissions['REGISTERED']['read'] = true;
$wgGroupPermissions['REGISTERED']['edit'] = true;
$wgGroupPermissions['REGISTERED']['createpage'] = true;
$wgGroupPermissions['REGISTERED']['createtalk'] = true;
$wgGroupPermissions['REGISTERED']['writeapi'] = true;
$wgGroupPermissions['REGISTERED']['upload'] = true;
$wgGroupPermissions['REGISTERED']['reupload'] = true;
$wgGroupPermissions['REGISTERED']['reupload-shared'] = true;
$wgGroupPermissions['REGISTERED']['minoredit'] = true;
$wgGroupPermissions['REGISTERED']['purge'] = true; // can use ?action=purge without clicking "ok"
$wgGroupPermissions['REGISTERED']['sendemail'] = true;

$wgGroupPermissions['REGISTERED_COPPA']['move'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['move-subpages'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['move-rootuserpages'] = true; // can move root userpages
$wgGroupPermissions['REGISTERED_COPPA']['read'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['edit'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['createpage'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['createtalk'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['writeapi'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['upload'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['reupload'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['reupload-shared'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['minoredit'] = true;
$wgGroupPermissions['REGISTERED_COPPA']['purge'] = true; // can use ?action=purge without clicking "ok"
$wgGroupPermissions['REGISTERED_COPPA']['sendemail'] = true;

// Users with bot privilege can have their edits hidden from various log pages by default
$wgGroupPermissions['BOTS']['bot'] = true;
$wgGroupPermissions['BOTS']['autoconfirmed'] = true;
$wgGroupPermissions['BOTS']['nominornewtalk'] = true;
$wgGroupPermissions['BOTS']['autopatrol'] = true;
$wgGroupPermissions['BOTS']['suppressredirect'] = true;
$wgGroupPermissions['BOTS']['apihighlimits'] = true;
$wgGroupPermissions['BOTS']['writeapi'] = true;

// Most extra permission abilities go to this group
$wgGroupPermissions['GLOBAL_MODERATOR']['block'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['createaccount'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['delete'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['bigdelete'] = true; // can be separately configured for pages with > $wgDeleteRevisionsLimit revs
$wgGroupPermissions['GLOBAL_MODERATOR']['deletedhistory'] = true; // can view deleted history entries, but not see or restore the text
$wgGroupPermissions['GLOBAL_MODERATOR']['deletedtext'] = true; // can view deleted revision text
$wgGroupPermissions['GLOBAL_MODERATOR']['undelete'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['editinterface'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['editusercss'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['edituserjs'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['import'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['importupload'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['move'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['move-subpages'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['move-rootuserpages'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['patrol'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['autopatrol'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['protect'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['proxyunbannable'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['rollback'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['upload'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['reupload'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['reupload-shared'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['unwatchedpages'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['autoconfirmed'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['upload_by_url'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['ipblock-exempt'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['blockemail'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['markbotedits'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['apihighlimits'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['browsearchive'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['noratelimit'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['movefile'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['unblockself'] = true;
$wgGroupPermissions['GLOBAL_MODERATOR']['suppressredirect'] = true;

$wgGroupPermissions['ADMINISTRATORS']['block'] = true;
$wgGroupPermissions['ADMINISTRATORS']['createaccount'] = true;
$wgGroupPermissions['ADMINISTRATORS']['delete'] = true;
$wgGroupPermissions['ADMINISTRATORS']['bigdelete'] = true; // can be separately configured for pages with > $wgDeleteRevisionsLimit revs
$wgGroupPermissions['ADMINISTRATORS']['deletedhistory'] = true; // can view deleted history entries, but not see or restore the text
$wgGroupPermissions['ADMINISTRATORS']['deletedtext'] = true; // can view deleted revision text
$wgGroupPermissions['ADMINISTRATORS']['undelete'] = true;
$wgGroupPermissions['ADMINISTRATORS']['editinterface'] = true;
$wgGroupPermissions['ADMINISTRATORS']['editusercss'] = true;
$wgGroupPermissions['ADMINISTRATORS']['edituserjs'] = true;
$wgGroupPermissions['ADMINISTRATORS']['import'] = true;
$wgGroupPermissions['ADMINISTRATORS']['importupload'] = true;
$wgGroupPermissions['ADMINISTRATORS']['move'] = true;
$wgGroupPermissions['ADMINISTRATORS']['move-subpages'] = true;
$wgGroupPermissions['ADMINISTRATORS']['move-rootuserpages'] = true;
$wgGroupPermissions['ADMINISTRATORS']['patrol'] = true;
$wgGroupPermissions['ADMINISTRATORS']['autopatrol'] = true;
$wgGroupPermissions['ADMINISTRATORS']['protect'] = true;
$wgGroupPermissions['ADMINISTRATORS']['proxyunbannable'] = true;
$wgGroupPermissions['ADMINISTRATORS']['rollback'] = true;
$wgGroupPermissions['ADMINISTRATORS']['upload'] = true;
$wgGroupPermissions['ADMINISTRATORS']['reupload'] = true;
$wgGroupPermissions['ADMINISTRATORS']['reupload-shared'] = true;
$wgGroupPermissions['ADMINISTRATORS']['unwatchedpages'] = true;
$wgGroupPermissions['ADMINISTRATORS']['autoconfirmed'] = true;
$wgGroupPermissions['ADMINISTRATORS']['upload_by_url'] = true;
$wgGroupPermissions['ADMINISTRATORS']['ipblock-exempt'] = true;
$wgGroupPermissions['ADMINISTRATORS']['blockemail'] = true;
$wgGroupPermissions['ADMINISTRATORS']['markbotedits'] = true;
$wgGroupPermissions['ADMINISTRATORS']['apihighlimits'] = true;
$wgGroupPermissions['ADMINISTRATORS']['browsearchive'] = true;
$wgGroupPermissions['ADMINISTRATORS']['noratelimit'] = true;
$wgGroupPermissions['ADMINISTRATORS']['movefile'] = true;
$wgGroupPermissions['ADMINISTRATORS']['unblockself'] = true;
$wgGroupPermissions['ADMINISTRATORS']['suppressredirect'] = true;

$wgGroupPermissions['ADMINISTRATORS']['userrights'] = true;
$wgGroupPermissions['ADMINISTRATORS']['noratelimit'] = true;

switch (substr($_SERVER['HTTP_HOST'],0,3)) {
    case "en.":
        require_once( 'LocalSettings_en.php' );
        break;

    case "es.":
        require_once( 'LocalSettings_es.php' );
        break;

    default:
        $host = $_SERVER['HTTP_HOST'];
        $script = $_SERVER['SCRIPT_NAME'];
        $params = $_SERVER['QUERY_STRING'];
        $currentUrl = $host . $script . '?' . $params;

        header("Location: http://en." . $currentUrl);
        die();
        break;
}
