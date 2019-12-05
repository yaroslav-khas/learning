<?php

namespace Khas\YourArt\Controller;

use Khas\YourArt\Controller\YourArtController;
use Khas\YourArt\Domain\Repository\StyleRepository;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use function GuzzleHttp\Promise\queue;

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
     * @var \Khas\YourArt\Domain\Repository\PaintingsRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $paintingsRepository;

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

    /**
     * @param array $filters
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\NoSuchArgumentException
     * @throws  \TYPO3\CMS\Extbase\Persistence\QueryInterface
     */
    public function listAction()
    {
        if ($this->request->hasArgument('filters')) {
            $filters['filters'] = $this->request->getArgument('filters');
            if ($filters['filters']['sorts']) {
                $this->paintingsRepository->setDefaultOrderings(array('name' => QueryInterface::ORDER_DESCENDING));
            }
            $items = $this->paintingsRepository->filterForm($filters);
            $items = $items->toArray();
        } else {
            $items = $this->paintingsRepository->findAll();
            $items = $items->toArray();
        }
        $this->view->assignMultiple(['items' => $items, 'filters' => $filters['filters'], 'arguments' => $this->request->getArguments()]);
    }


    /**
     * @param \Khas\YourArt\Domain\Model\Paintings $item
     */
    public function detailAction(\Khas\YourArt\Domain\Model\Paintings $item)
    {
        $this->view->assign('item', $item);
    }

    /**
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\NoSuchArgumentException
     */
    public function filterAction()
    {
        if ($this->request->hasArgument('filters')) {
            $this->view->assign('filters', $this->request->getArgument('filters'));
        }
        $styles = $this->styleRepository->findAll();
        $styles = $styles->toArray();
        $tags = $this->tagRepository->findAll();
        $tags = $tags->toArray();
        $author = $this->authorRepository->findAll();
        $author = $author->toArray();
        $this->view->assignMultiple(['style' => $styles, 'tags' => $tags, 'author' => $author, 'arguments' => $this->request->getArguments()]);
    }

    public function searchFormAction()
    {

    }

    public function updateAction(\Khas\YourArt\Domain\Model\Paintings $item)
    {
        $this->paintingsRepository->update($item);
        $this->redirect('list');
    }

    public function updateFormAction(\Khas\YourArt\Domain\Model\Paintings $item)
    {
        $this->view->assign('item', $item);

    }

    public function deleteAction(\Khas\YourArt\Domain\Model\Paintings $item)
    {
        $this->paintingsRepository->remove($item);
        $this->redirect('list');
    }

    /**
     * @param \Khas\YourArt\Domain\Model\Author $item
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function detailAuthorAction(\Khas\YourArt\Domain\Model\Author $item)
    {

        $items =$this->paintingsRepository->findAuthorsPicture($item->getUid());

        $this->view->assignMultiple(['author'=> $item, 'listArts'=>$items]);
    }


}
