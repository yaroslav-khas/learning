<?php
namespace Khas\Template\Domain\Model;

/**
* News model for default news
*
* @package TYPO3
* @subpackage tx_news
*/
class NewsDefault extends \GeorgRinger\News\Domain\Model\NewsDefault {
/**
* @var string
*/
protected $test;

/**
* Get title
*
* @return string
*/
public function getTest()
{
// return "teststring";
return $this->test;
}

/**
* Set title
*
* @param string $subtitle subtitle
* @return void
*/
public function setTest($test)
{
$this->test = $test;
}
}