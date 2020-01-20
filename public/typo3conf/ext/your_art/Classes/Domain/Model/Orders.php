<?php

namespace Khas\YourArt\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Orders extends AbstractEntity
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
     * @TYPO3\CMS\Extbase\Annotation\Validate("StringLength", options={"minimum": 3, "maximum": 50})
     */
    protected $name;
    /**
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("StringLength", options={"minimum": 3, "maximum": 50})
     */
    protected $surname;
    /**
     * @var integer
     */
    protected $userId;
    /**
     * @var string
     */
    protected $deliveryCompany;
    /**
     * @var string
     */
    protected $deliveryCity;
    /**
     * @var string
     */
    protected $deliveryWarehouse;

    /**
     * @var float
     */
    protected $totalSum;
    /**
     * Orderproducts items
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Khas\YourArt\Domain\Model\Orderproducts>
     * @lazy
     */
    protected $orderProducts;

    /**
     * @var integer
     */
    protected $status;


    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getDeliveryCompany()
    {
        return $this->deliveryCompany;
    }

    /**
     * @param int $deliveryCompany
     */
    public function setDeliveryCompany($deliveryCompany)
    {
        $this->deliveryCompany = $deliveryCompany;
    }

    /**
     * @return float
     */
    public function getTotalSum()
    {
        return $this->totalSum;
    }

    /**
     * @param float $totalSum
     */
    public function setTotalSum($totalSum)
    {
        $this->totalSum = $totalSum;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $orderProducts
     */
    public function setOrderProducts($orderProducts)
    {
        $this->orderProducts = $orderProducts;
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

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->deliveryCity;
    }

    /**
     * @param string $deliveryCity
     */
    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = $deliveryCity;
    }

    /**
     * @return string
     */
    public function getDeliveryWarehouse()
    {
        return $this->deliveryWarehouse;
    }

    /**
     * @param string $deliveryWarehouse
     */
    public function setDeliveryWarehouse($deliveryWarehouse)
    {
        $this->deliveryWarehouse = $deliveryWarehouse;
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


}
