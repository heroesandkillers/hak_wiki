<?php
 
# To install the extension, add to your LocalSettings.php:
# require_once("$IP/extensions/TopTenPages.php");

/*
        Syntax:
        <TopTenPages/>
        <TopTenPages>5</TopTenPages>
        <TopTenPages offset="1"/>
        {{Special:TopTenPages}}
        {{Special:TopTenPages/-/5}}
        {{Special:TopTenPages/1/5}}
*/
 
$wgExtensionCredits['specialpage'][] = array(
        'name' => 'TopTenPages',
        'version' => '0.3.1',
        'author' => array(
                'Timo Tijhof',
                'Sascha',
        ),
        'url' => 'https://www.mediawiki.org/wiki/Extension:TopTenPages',
        'description' => 'Shows most viewed pages.',
);
 
$wgAutoloadClasses['SpecialTopTenPages'] = __DIR__ . '/SpecialTopTenPages.php';
$wgSpecialPages['TopTenPages'] = 'SpecialTopTenPages';
$wgSpecialPageGroups['TopTenPages'] = 'other';
 
$wgExtensionFunctions[] = 'efTopTenPages';
 
function efTopTenPages() {
        global $wgParser;
        $wgParser->setHook( 'TopTenPages', 'efTopTenPagesRender' );
}
 
/**
 * The callback function for converting the input text to HTML output.
 */
function efTopTenPagesRender( $text, array $args, Parser $parser, PPFrame $frame ) {
        if (array_key_exists('offset', $args)) {
                $offset = (int) $args['offset'];
        } else {
                $offset = 0;
        }
        if ($text > 0){
                $limit = (int) $text;
        } else {
                $limit = 10;
        }
        return $parser->recursiveTagParse( "{{Special:TopTenPages/$offset/$limit}}", $frame );
}