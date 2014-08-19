<?php

$TCA['tx_mocbeer_domain_model_beer'] = array(
	'ctrl' => $TCA['tx_mocbeer_domain_model_beer']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, name, alcohol_by_volume',
	),
	'types' => array(
		'1' => array('showitem' => 'hidden, name, alcohol_by_volume'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
        'name' => array(
			'exclude' => 0,
			'label' => 'Beer name',
			'config' => array(
				'type' => 'input',
				'eval' => 'required'
			),
		),
		'alcohol_by_volume' => array(
			'exclude' => 0,
			'label' => 'Alcohol by volume (abv)',
			'config' => array(
				'type' => 'input',
				'eval' => 'double6, required'
			),
		),

	)
);
