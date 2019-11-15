<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Khas.paintings',
    'Pi2',
    'Paintings',
    'EXT:paintings/Resources/Public/Icons/Extension.svg'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['paintings_pi2'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('paintings_pi2',
    'FILE:EXT:paintings/Configuration/FlexForms/flexform_paintings.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_paintings_domain_model_paintings');
