<?php

namespace Khas\Template\Domain\Model;

/**
 * News model for default news
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class NewsDefault extends \GeorgRinger\News\Domain\Model\NewsDefault
{
    /**
     * @var boolean
     */
    protected $checkUserFunction;

    /**
     * @var string
     */
    protected $cardNumber;

    /**
     * @var string
     */
    protected $typeCard;

    /**
     * @var string
     */
    protected $cardHolder;

    /**
     * @return string
     */
    public function getCheckUserFunction()
    {
        return $this->checkUserFunction;
    }

    /**
     * @param string $checkUserFunction
     */
    public function setCheckUserFunction($checkUserFunction)
    {
        $this->checkUserFunction = $checkUserFunction;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param mixed $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return mixed
     */
    public function getTypeCard()
    {
        return $this->typeCard;
    }

    /**
     * @param mixed $typeCard
     */
    public function setTypeCard($typeCard)
    {
        $this->typeCard = $typeCard;
    }

    /**
     * @return string
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * @param string $cardHolder
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
    }


}