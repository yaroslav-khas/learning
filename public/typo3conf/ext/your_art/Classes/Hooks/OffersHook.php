<?php

namespace Khas\YourArt\Hooks;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class OffersHook
{
    /**
     * @param array $config
     * @return array
     */
    public function getTitleWithId($config)
    {
        DebuggerUtility::debug($config);
    }
}
