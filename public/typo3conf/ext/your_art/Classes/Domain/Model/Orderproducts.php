<?php

namespace Khas\YourArt\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Orderproducts extends AbstractEntity
{
    /**
     * Paintings items
     *
     * @var \Khas\YourArt\Domain\Model\Paintings
     * @lazy
     */
    protected $productId;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $price;

    /**
     * Order_id items
     *
     * @var int
     *
     */
    protected $orderId;


    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return Paintings
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param Paintings $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }


}
