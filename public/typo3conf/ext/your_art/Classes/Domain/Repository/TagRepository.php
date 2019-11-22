<?php

namespace Khas\YourArt\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class TagRepository
 *
 * @package Khas\YourArt\Domain\Repository
 */
class TagRepository extends Repository
{
    /**
     * @param string $uid
     */
    public function findByTag($uid)
    {
        $query = $this->createQuery();
        $constraints = array();
        $yourTag = 2;
        $constraints[] = $query->contains('', $yourTag);
        $query->matching(
            $query->like('uid', '%' . $uid . '%')
        )->count();
        $query = $query->execute();
        return $query;
    }
}
