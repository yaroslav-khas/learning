<?php

namespace Khas\Paintings\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class PaintingsRepository
 *
 * @package Khas\Paintings\Domain\Repository
 */
class PaintingsRepository extends Repository
{
    /**
     * @param string $search
     */
    public function findSearchForm($search)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->like('name', '%' . $search . '%')
        )->count();
        $query = $query->execute();
        return $query;
    }
}
