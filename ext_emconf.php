<?php


$EM_CONF[$_EXTKEY] = array(
	'title' => 'MOC - unittest demo extension',
	'description' => 'Provides examples of unittests as a part of the material for a workshop on testing with TYPO3',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.00',
	'dependencies' => 'extbase, fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'p',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Jan-Erik Revsbech',
	'author_email' => 'janerik@moc.net',
	'author_company' => 'MOC A/S',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.7.0-4.7.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
);

?>