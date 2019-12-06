<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Khas.YourArt',
    'Arts',
    [
        'Auction'=>'list,searchForm,detail,detailAuthor,addCart',
    ],
    [
        'Auction'=>'searchForm',
    ]
);
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['yourart'] = 'Khas\\YourArt\\Hooks\\DataHandler';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1575560010] = [
    'nodeName' => 'CountField',
    'priority' => 40,
    'class' => \Khas\YourArt\Form\Element\CountField::class,
];
