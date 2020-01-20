<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Khas.YourArt',
    'Arts',
    'YourArt',
    'EXT:your_art/Resources/Public/Icons/Extension.svg'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['yourart_arts'] = 'pi_flexform';
$GLOBALS['TCA']['tx_powermail_domain_model_field']['columns']['css']['config']['items']= '';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('yourart_arts',
    'FILE:EXT:your_art/Configuration/FlexForms/flexform_yourart.xml');
