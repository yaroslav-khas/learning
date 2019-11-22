<?php

namespace Khas\YourArt\Controller;

use Khas\YourArt\Controller\YourArtController;
use Khas\YourArt\Domain\Repository\StyleRepository;
use TYPO3\CMS\Core\Utility\DebugUtility;

class AuctionController extends YourArtController
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
     * @var \Khas\YourArt\Domain\Repository\YourArtRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $yourartRepository;

    /**
     * @var \Khas\YourArt\Domain\Repository\StyleRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $styleRepository;

    /**
     * @var \Khas\YourArt\Domain\Repository\TagRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $tagRepository;
    /**
     * @var \Khas\YourArt\Domain\Repository\AuthorRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $authorRepository;


    public function listAction()
    {
        \TYPO3\CMS\Core\Utility\DebugUtility::debug($this->request->getArguments());
        if ($this->request->hasArgument('search')) {
            $items = $this->yourartRepository->findByName($this->request->getArgument("search"));
            $items = $items->toArray();
        } elseif ($this->request->hasArgument('style') && $this->request->getArgument('style')) {
            $items = $this->yourartRepository->findByStyle($this->request->getArgument("style"));

        } elseif ($this->request->hasArgument('tags') && $this->request->getArgument('tags')) {
            $items = $this->yourartRepository->findByTag($this->request->getArgument("tags"));

        }elseif ($this->request->hasArgument('author') && $this->request->getArgument('author')) {
            $items = $this->yourartRepository->findByAuthor($this->request->getArgument("author"));

        } else {
            $items = $this->yourartRepository->findAll();
            $items = $items->toArray();
        }

        if ($items) {
            $this->view->assign('items', $items);
        }


    }

    /**
     * @param \Khas\YourArt\Domain\Model\YourArt $item
     */
    public function detailAction(\Khas\YourArt\Domain\Model\YourArt $item)
    {
        $this->view->assign('item', $item);
    }

    public function filterAction()
    {
        $styles = $this->styleRepository->findAll();
        $styles = $styles->toArray();
        $tags = $this->tagRepository->findAll();
        $tags = $tags->toArray();
        $author=$this->authorRepository->findAll();
        $author=$author->toArray();
        $this->view->assignMultiple(['style' => $styles, 'tags' => $tags, 'author'=>$author]);
    }

    /**
     * @param string $search
     */
    public function searchFormAction()
    {
        //$search = $this->yourartRepository->findSearchForm($search);
        //$items = $search->toArray();
        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($items);exit;

        //$this->redirect('list',null,null,$items);
    }

    public function updateAction(\Khas\YourArt\Domain\Model\YourArt $item)
    {
        $this->yourartRepository->update($item);
        $this->redirect('list');
    }

    public function updateFormAction(\Khas\YourArt\Domain\Model\YourArt $item)
    {
        $this->view->assign('item', $item);

    }

    public function deleteAction(\Khas\YourArt\Domain\Model\YourArt $item)
    {
        $this->yourartRepository->remove($item);
        $this->redirect('list');
    }


}
