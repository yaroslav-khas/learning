<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Khas.paintings',
    'Showcase',
    [
        'Paintings'=>'list'
    ],
    [
        'Paintings'=>'list'
    ]
);