<?php
/**
*
* fieldconfig for wordcamp-belohorizonte-badges/Configuration
*
* @package WordCamp_Belohorizonte_Badges
* @author Myles McNamara myles@smyl.es
* @license GPL-2.0+
* @link http://smyl.es
* @copyright 2015 Myles McNamara
*/


$group = array(
	'label' => __('Configuration','wordcamp-belohorizonte-badges'),
	'id' => '60981314',
	'master' => 'badge_type',
	'fields' => array(
		'badge_type'	=>	array(
			'label'		=> 	__('Badge Type','wordcamp-belohorizonte-badges'),
			'caption'	=>	__('Badge Type','wordcamp-belohorizonte-badges'),
			'type'		=>	'dropdown',
			'default'	=> 	__('*attending||Im Attending,speaking||Im Speaking,sponsor||Im a Proud Sponsor,volunteer||Im a Volunteer','wordcamp-belohorizonte-badges'),
		),
		'alignment'	=>	array(
			'label'		=> 	__('Alignment','wordcamp-belohorizonte-badges'),
			'caption'	=>	__('Alignment','wordcamp-belohorizonte-badges'),
			'type'		=>	'onoff',
			'default'	=> 	__('*none||None,left||Left,center||Center,right||Right','wordcamp-belohorizonte-badges'),
			'inline'	=> 	true,
		),
	),
	'styles'	=> array(
		'toggles.css',
	),
	'scripts'	=> array(
		'toggles.min.js',
	),
	'multiple'	=> false,
);

