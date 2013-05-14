<?php
/**
* Skin file for skin FieldGray.
*
* @file
* @ingroup Skins
*/

require_once( dirname( __FILE__ ) . '/../Vector.php' );

/**
 * SkinTemplate class for FieldGray skin
 * @ingroup Skins
 */
class SkinFieldGray extends SkinVector {

	var $skinname = 'fieldgray', $stylename = 'fieldgray';

	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.fieldgray" );
	}

}
