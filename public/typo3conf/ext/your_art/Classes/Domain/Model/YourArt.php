<?php

namespace Khas\YourArt\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class YourArt extends AbstractEntity
{


    /**
     * @var \DateTime
     */
    protected $crdate;
    /**
     * @var \DateTime
     */
    protected $tstamp;

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
     * Author items
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Khas\YourArt\Domain\Model\Author>
     * @lazy
     *
     */
    protected $author;

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
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Khas\YourArt\Domain\Model\Tag>
     * @lazy
     *
     */
    protected $tags;
    /**
     * Style items
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Khas\YourArt\Domain\Model\Style>
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

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return \DateTime
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * @param \DateTime $crdate
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
    }

    /**
     * @return \DateTime
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * @param \DateTime $tstamp
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;
    }


}
