<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Khas.YourArt',
    'Arts',
    [
        'Auction'=>'list,searchForm,detail,update,delete,filter,detailAuthor',
    ],
    [
        'Auction'=>'searchForm',
    ]
);
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['yourart'] = 'Khas\\YourArt\\Hooks\\DataHandler';
//$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['yourart'] = \Khas\YourArt\Hooks\DataHandler::class .'->processCmdmap_postProcess';

