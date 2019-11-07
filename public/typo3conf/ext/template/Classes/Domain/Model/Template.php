<?php
namespace Khas\Template\Domain\Model;

/**
 * News model for default news
 *
 * @package TYPO3
 * @subpackage tx_template
 */


class Template extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
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
    protected $quantity;



    /**
     *
     * Initialize categories and media relation
     *
     * @return \Khas\Template\Domain\Model\Template
     */
    public function __construct($name,$description,$quantity)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setQuantity($quantity);
    }

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
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

}