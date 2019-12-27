<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Khas.YourArt',
        'web',
        'm1',
        'bottom',
        [
            'Backend' => 'index'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:your_art/Resources/Public/Icons/Extension.svg',
            'labels' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}
