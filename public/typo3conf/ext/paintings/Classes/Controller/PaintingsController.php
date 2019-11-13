<?php

namespace Khas\Paintings\Controller;

use Khas\Paintings\Domain\Model\Paintings;
use Khas\Paintings\Domain\Repository\PaintingsRepository;

class PaintingsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * Initializes the current action
     *
     * @return void
     */
    public function initializeAction()
    {
    }

    /**
     * @var PaintingsRepository
     */
    private $paintingsRepository;

    /**
     * Inject the offer repository
     *
     * @param \Khas\Paintings\Domain\Repository\PaintingsRepository $paintingsRepository
     */
    public function injectOfferRepository(PaintingsRepository $paintingsRepository)
    {
        $this->paintingsRepository = $paintingsRepository;
    }
    public function listAction()
    {
        $items=$this->paintingsRepository->findAll();
        $items=$items->toArray();
        $this->view->assign('items', $items);
        var_dump($items);
    }
}