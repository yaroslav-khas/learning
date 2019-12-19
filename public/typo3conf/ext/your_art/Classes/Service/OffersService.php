<?php

namespace Khas\YourArt\Service;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;

class OffersService
{
    /**
     * @param $authorId
     * @return int
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public static function countOfAllPaintingsByAuthor($authorId)
    {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $paintingsRepository = $objectManager->get(\Khas\YourArt\Domain\Repository\PaintingsRepository::class);
        $paintings = $paintingsRepository->findPictures($authorId);
        $allSum = 0;
        foreach ($paintings as $item) {
            $allSum = $allSum + $item->getPrice();
        }
        return $allSum;
    }
}
