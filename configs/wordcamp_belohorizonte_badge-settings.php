<?php
/**
*
* fieldconfig for wordcamp-belohorizonte-badges/Settings
*
* @package WordCamp_Belohorizonte_Badges
* @author Myles McNamara myles@smyl.es
* @license GPL-2.0+
* @link http://smyl.es
* @copyright 2015 Myles McNamara
*/


$group = array(
	'label' => __('Settings','wordcamp-belohorizonte-badges'),
	'id' => '60981314',
	'master' => 'badge_type',
	'fields' => array(
		'badge_type'	=>	array(
			'label'		=> 	__('Badge Type','wordcamp-belohorizonte-badges'),
			'caption'	=>	__('Type of badge to display','wordcamp-belohorizonte-badges'),
			'type'		=>	'dropdown',
			'default'	=> 	__('*attending||Im Attending,speaking||Im Speaking,sponsor||Im a Proud Sponsor,volunteer||Im a Volunteer','wordcamp-belohorizonte-badges'),
		),
	),
	'multiple'	=> false,
);

