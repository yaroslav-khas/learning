<?php

namespace Khas\YourArt\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class YourArtRepository
 *
 * @package Khas\YourArt\Domain\Repository
 */
class YourArtRepository extends Repository
{
    /**
     * @param string $name
     */
    public function findByName($name)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->like('name', '%' . $name . '%')
        );
        $query = $query->execute();
        return $query;
    }

    /**
     * @param array $yourStyle
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryInterface|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findByStyle(array $yourStyle)
    {
        $query = $this->createQuery();
        $constraints = array();
        foreach ($yourStyle as $item) {
            $constraints[] = $query->contains('style', $item);
        }
        $query->matching(
            $query->logicalOr($constraints)
        );
        $query = $query->execute();
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($query);

        return $query;
    }

    /**
     * @param array $yourTag
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findByTag(array $yourTag)
    {
        $query = $this->createQuery();
        $constraints = array();
        foreach ($yourTag as $item) {
            $constraints[] = $query->contains('tags', $item);
        }
        $query->matching(
        $query->logicalOr($constraints)
        );
        $query = $query->execute();
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($constraints);

        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($query);

        return $query;
    }
    /**
     * @param array $yourAuthor
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findByAuthor(array $yourAuthor)
    {
        $query = $this->createQuery();
        $constraints = array();
        foreach ($yourAuthor as $item) {
            $constraints[] = $query->contains('author', $item);
        }
        $query->matching(
            $query->logicalOr($constraints)
        );
        $query = $query->execute();
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($constraints);

        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($query);

        return $query;
    }
}
