<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'your_art',
    'Configuration/TSconfig/Page/Powermail.typoscript',
    'My special config for powermail'
);

