<?php

namespace Khas\YourArt\ViewHelpers;

use TYPO3\CMS\Core\Cache\CacheManager;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class UserViewHelper extends AbstractViewHelper
{
    /**
     * @return string
     */
    public function render()
    {
        GeneralUtility::makeInstance(CacheManager::class)->flushCaches();
        return strval($GLOBALS['TSFE']->fe_user->user['username']);
    }
}