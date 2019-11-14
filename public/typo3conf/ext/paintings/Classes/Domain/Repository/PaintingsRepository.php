<?php
namespace Khas\Paintings\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class PaintingsRepository
 *
 * @package Khas\Paintings\Domain\Repository
 */

class PaintingsRepository extends Repository{
 public function findSearchWord($search){
     $query = $this->createQuery();
     $query->matching(
         $query->like('name','%'.$search.'%')
     );
     $query=$query->execute();
     \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($query);

     return $query;
 }
}
