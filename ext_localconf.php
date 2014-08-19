<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'MocBeer',
	array(
        'Beer' => 'list, show, new, create',
	),
	// non-cacheable actions
	array(
		'Beer' => 'list, show, new, create',
	)
);