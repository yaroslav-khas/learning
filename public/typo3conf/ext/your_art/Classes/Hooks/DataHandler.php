<?php

namespace Khas\YourArt\Hooks;

use TYPO3\CMS\Backend\Utility\BackendUtility as BackendUtilityCore;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;

class DataHandler
{
    /**
     * @var \Khas\YourArt\Domain\Repository\PaintingsRepository
     */
    protected $paintingsRepository;

    /**
     * @param $status
     * @param $table
     * @param $id
     * @param $fieldArray
     * @param \TYPO3\CMS\Core\DataHandling\DataHandler $pObj
     */
    public function processDatamap_postProcessFieldArray($status, $table, $id, &$fieldArray, \TYPO3\CMS\Core\DataHandling\DataHandler &$pObj)
    {
        if ($table === 'tx_yourart_domain_model_offers') {
            $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
            $this->paintingsRepository = $objectManager->get(\Khas\YourArt\Domain\Repository\PaintingsRepository::class);
            if ($status === 'new' && $paintings = $this->paintingsRepository->findByUid($fieldArray['picture_id'])) {
                $fieldArray['title'] = $paintings->getName();
                $fieldArray['description'] = $paintings->getDescription();
                $fieldArray['author'] = $paintings->getAuthor()->getUid();
                //debug($fieldArray);
            }
        }
    }
}
