<?php

namespace Khas\YourArt\Domain\Repository;

use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class PaintingsRepository
 *
 * @package Khas\YourArt\Domain\Repository
 */
class PaintingsRepository extends Repository
{

    protected $defaultOrderings = [
        'name' => QueryInterface::ORDER_ASCENDING,
    ];

    /**
     * @param array $filters
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function filterForm(array $filters)
    {
        $query = $this->createQuery();
        $constraints = array();
        foreach ($filters['filters'] as $key => $filter) {
            if ($key != "name" && $key != "sorts" && $filter != '') {
                foreach ($filter as $item) {
                    $constraints[] = $query->contains(str_replace("'", "", $key), $item);
                }
            } elseif ($key == "name") {
                $constraints[] = $query->like('name', '%' . $filter . '%');
            }
        }
        $query->matching(
            $query->logicalAnd($constraints)
        );
        $query = $query->execute();
        return $query;
    }

    /**
     * @param $uid
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findDetail($uid)
    {
        return $this->findByIdentifier($uid);
    }

    /**
     * @param string $uid
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findAuthorsPicture($uid)
    {
        $query = $this->createQuery();
        $constraints = array();
        $constraints[] = $query->equals('author', $uid);
        $query->matching(
            $query->logicalOr($constraints)
        );
        $query = $query->execute();

        return $query;
    }

    /**
     * @param integer $id
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findPictures($id)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $query->matching(
            $query->like('author', $id . '%')
        );
        $query = $query->execute();
        return $query;
    }

}
