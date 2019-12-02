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