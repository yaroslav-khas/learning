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
    protected $companyName;

    public function getCompanyName()
    {
        return $this->companyName;
    }
}