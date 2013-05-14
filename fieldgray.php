<?php
/**
 * FieldGray skin
 *
 * @file
 * @ingroup Skins
 * @author Inquisitor Ehrenstein (http://www.mediawiki.org/wiki/User:Inquisitor_Ehrenstein)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array (
	'path' => __FILE__,
	'name' => 'FieldGray',
	'url' => "[http://www.mediawiki.org/wiki/Skin:FieldGray]",
	'author' => '[http://mediawiki.org/wiki/User:Inquisitor_Ehrenstein Inquisitor Ehrenstein]',
	'descriptionmsg' => 'mywiki-desc',
);

$wgValidSkinNames['fieldgray'] = 'FieldGray';
$wgAutoloadClasses['SkinFieldGray'] = dirname(__FILE__).'/FieldGray.skin.php';
$wgExtensionMessagesFiles['FieldGray'] = dirname(__FILE__).'/FieldGray.i18n.php';

$wgResourceModules['skins.fieldgray'] = array(
	'styles' => array(
		'FieldGray/screen.css' => array( 'media' => 'screen' ),
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
        'dependencies' => 'skin.vector'
);
