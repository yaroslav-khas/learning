<?php

namespace Khas\Paintings\Controller;

use GeorgRinger\News\Domain\Model\Dto\Search;
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
    /**
     * @param string $search
     */
    public function listAction($search=null)
    {

        if ($search) {
            $search = $this->paintingsRepository->findSearchForm($search);
            $items=$search->toArray();
        } else {
            $items = $this->paintingsRepository->findAll();
            $items = $items->toArray();
        }
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($items);
        $this->view->assign('items', $items);
    }

    /**
     * @param \Khas\Paintings\Domain\Model\Paintings $item
     */
    public function detailAction(\Khas\Paintings\Domain\Model\Paintings $item)
    {
        $this->view->assign('item', $item);
    }

    public function updateAction(\Khas\Paintings\Domain\Model\Paintings $item)
    {
        $this->paintingsRepository->update($item);
        $this->redirect('list');
    }

    public function updateFormAction(\Khas\Paintings\Domain\Model\Paintings $item)
    {
        $this->view->assign('item', $item);

    }

    public function deleteAction(\Khas\Paintings\Domain\Model\Paintings $item)
    {
        $this->paintingsRepository->remove($item);
        $this->redirect('list');
    }

    public function searchItemAction()
    {

    }
}