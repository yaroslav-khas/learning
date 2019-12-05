<?php
namespace Khas\YourArt\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
class Offers extends AbstractEntity{
    /**
     * @var integer
     */
    protected $pictureId;
    /**
     * @var string
     */
    protected $title;

    /**
     * @return int
     */
    public function getPictureId()
    {
        return $this->pictureId;
    }

    /**
     * @param int $pictureId
     */
    public function setPictureId($pictureId)
    {
        $this->pictureId = $pictureId;
    }

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