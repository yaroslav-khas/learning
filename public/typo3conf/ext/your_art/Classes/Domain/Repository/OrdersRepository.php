<?php

namespace Khas\YourArt\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class AuthorRepository
 *
 * @package Khas\YourArt\Domain\Repository
 */
class OrdersRepository extends Repository
{

    public function initializeObject()
    {
        $querySettings = $this->objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}