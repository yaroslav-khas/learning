<?php
namespace Khas\Paintings\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Paintings extends AbstractEntity{

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $price;

    /**
     * Image items
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @lazy
     *
     */
    protected $image;
    /**
     * Tags items
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Khas\Paintings\Domain\Model\Tag>
     * @lazy
     *
     */
    protected $tags;
    /**
     * Style items
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Khas\Paintings\Domain\Model\Style>
     * @lazy
     *
     */
    protected $style;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }


}
