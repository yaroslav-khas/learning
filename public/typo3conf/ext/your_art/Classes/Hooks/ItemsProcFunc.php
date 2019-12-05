<?php

namespace Khas\YourArt\Hooks;


use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;

class ItemsProcFunc
{
    /**
     * @var \Khas\YourArt\Domain\Repository\PaintingsRepository
     */
    protected $paintingsRepository;


    /**
     * @param $config
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findPictures(&$config)
    {
        debug($config);
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->paintingsRepository = $objectManager->get(\Khas\YourArt\Domain\Repository\PaintingsRepository::class);
        $paintings = $this->paintingsRepository->findPictures(current($config['row']['author']));
        $itemList = [];
        $all_sum=0;
        foreach ($paintings as $item) {
            $itemList[] = [$item->getName(),$item->getUid()];
            $all_sum=$all_sum+$item->getPrice();
        }
        debug($all_sum);
        $config['items'] = $itemList;
        debug($config);
        return $config;
    }

    public function countPrice($param){
debug($param);exit;
    }


}