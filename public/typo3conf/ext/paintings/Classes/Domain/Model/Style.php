<?php
namespace Khas\Paintings\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Style extends AbstractEntity{
    /**
     * @var string
     */
    protected $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}