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
        /*var_dump($item);
        $item=$this->paintingsRepository->findSearchWord($item);
        $this->view->assign('item',$item);*/
        $items = $this->paintingsRepository->findAll();
        $itemsC=$this->paintingsRepository->countAll();
        $items = $items->toArray();
        $this->view->assign('items', $items);
        $this->view->assign('itemsC',$itemsC);
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
    public function searchItemAction(){

    }
}