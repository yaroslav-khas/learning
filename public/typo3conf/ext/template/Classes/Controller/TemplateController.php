<?php
namespace Khas\Template\Controller;

use Khas\Template\Domain\Repository\TemplateRepository;

class TemplateController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var TemplateRepository
     */
    protected $templateRepository;

    public function __construct(TemplateRepository $templateRepository)
    {

        $this->templateRepository = $templateRepository;
    }
}