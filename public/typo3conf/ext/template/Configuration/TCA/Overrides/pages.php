<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'template',
    'Configuration/TSconfig/Page/Footer.typoscript',
    'My special config for footer data'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'template',
    'Configuration/TSconfig/Page/BackendLayouts.typoscript',
    'Backend LAyouts'
);

