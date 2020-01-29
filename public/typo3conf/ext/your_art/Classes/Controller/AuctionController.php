<?php

namespace Khas\YourArt\Controller;

use Khas\YourArt\Controller\YourArtController;
use Khas\YourArt\Domain\Model\Orders;
use Khas\YourArt\Domain\Repository\StyleRepository;
use Khas\YourArt\Service\OffersService;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Http\RequestHandlerInterface;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Validation\ValidatorResolver;
use function GuzzleHttp\Promise\queue;

class AuctionController extends YourArtController
{


    /**
     * @var \Khas\YourArt\Domain\Repository\PaintingsRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $paintingsRepository;

    /**
     * @var \Khas\YourArt\Domain\Repository\OffersRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $offersRepository;
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
     * @var \Khas\YourArt\Domain\Repository\OrdersRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $ordersRepository;
    /**
     * @var \Khas\YourArt\Domain\Repository\OrderproductsRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $orderproductsRepository;

    /**
     * Initializes the current action
     *
     * @return void
     */
    public function initializeAction()
    {
        /*if($this->request->getControllerActionName()=='order'){
            exit;
        };*/
    }


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

    public function searchFormAction()
    {
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


    /**
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function offersAction()
    {
        $offers = $this->offersRepository->findAll()->toArray();
        foreach ($offers as &$item) {
            $allSum = OffersService::countOfAllPaintingsByAuthor($item->getAuthor()->getUid());
            $item->setSum($allSum);
        }
        $this->view->assign('offers', $offers);
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

        $items = $this->paintingsRepository->findAuthorsPicture($item->getUid());

        $this->view->assignMultiple(['author' => $item, 'listArts' => $items]);
    }

    //****************Cart Actions

    /**
     * @param \Khas\YourArt\Domain\Model\Paintings $item
     * @return false|string
     */
    public function ajaxAddCartAction(\Khas\YourArt\Domain\Model\Paintings $item)
    {
        $items = [];
        if (!$GLOBALS['TSFE']->fe_user->getKey('ses', 'cart')) {
            $items[] = ['id' => $item->getUid(), 'quantity' => 1];
            $GLOBALS['TSFE']->fe_user->setKey("ses", "cart", $items);
        } else {
            $cart = $GLOBALS['TSFE']->fe_user->getKey('ses', 'cart');
            $found = false;
            foreach ($cart as &$cartItem) {
                if ($cartItem['id'] == $item->getUid()) {
                    $cartItem['quantity'] += 1;
                    $found = true;
                }
            }
            if (!$found) {
                $cart[] = ['id' => $item->getUid(), 'quantity' => 1];
            }
            $GLOBALS['TSFE']->fe_user->setKey('ses', "cart", $cart);

        }
        $GLOBALS['TSFE']->fe_user->storeSessionData();

        return json_encode('Success Add');
    }

    /**
     * @param string $itemUid
     * @param string $quantity
     * @return false|string
     */
    public function ajaxUpdateCartAction($itemUid, $quantity)
    {
        $cart = $GLOBALS['TSFE']->fe_user->getKey('ses', 'cart');
        $found = false;
        foreach ($cart as &$cartItem) {
            if ($cartItem['id'] == $itemUid) {
                $cartItem['quantity'] = $quantity;
                $found = true;
            }
        }
        $GLOBALS['TSFE']->fe_user->setKey('ses', "cart", $cart);
        $GLOBALS['TSFE']->fe_user->storeSessionData();
        return json_encode('success');
    }

    /**
     * @param string $itemUid
     * @return false|string
     */
    public function ajaxRemoveCartAction($itemUid)
    {
        $cart = $GLOBALS['TSFE']->fe_user->getKey('ses', 'cart');
        $found = false;
        foreach ($cart as $key => &$cartItem) {
            if ($cartItem['id'] == $itemUid) {
                unset($cart[$key]);
                $found = true;
            }
        }
        $GLOBALS['TSFE']->fe_user->setKey('ses', "cart", $cart);
        $GLOBALS['TSFE']->fe_user->storeSessionData();
        return json_encode('Success delete');
    }

    /**
     * @return false|string
     */
    public function ajaxGetCartAction()
    {
        $getCart = $GLOBALS['TSFE']->fe_user->getKey('ses', 'cart');
        (!$getCart) ? $getCart = 0 : '';
        $typoScriptFrontendController = $GLOBALS['TSFE'];
        $typoScriptFrontendController->setContentType('application/json');
        return json_encode($getCart);
    }

    public function cartAction()
    {
        $getCart = $GLOBALS['TSFE']->fe_user->getKey('ses', 'cart');
        $items = array();
        foreach ($getCart as $key => $item) {
            $items[$key] = $this->paintingsRepository->findByUid($item['id']);
            $items[$key]->setQuantity($item['quantity']);
        }
        debug($items);
        $this->view->assign('cartItems', $items);
    }

    /**
     * @param Orders $order
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function addOrderAction(Orders $order)
    {
        $parameters = $this->request->getArguments();
        $persistenceManager = $this->objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);
        $order->setUserId($GLOBALS['TSFE']->fe_user->user['uid']);
        $this->ordersRepository->add($order);
        $persistenceManager->persistAll();
        foreach ($parameters['item'] as $item) {
            $recordOrderProducts = GeneralUtility::makeInstance(\Khas\YourArt\Domain\Model\Orderproducts::class);
            $recordOrderProducts->setProductId((int)$item['uid']);
            $recordOrderProducts->setQuantity((int)$item['quantity']);
            $recordOrderProducts->setPrice((int)$item['price']);
            $recordOrderProducts->setOrderId($order->getUid());
            $this->orderproductsRepository->add($recordOrderProducts);
        }
        $persistenceManager->persistAll();
        $updRecordOrders = $this->ordersRepository->findByIdentifier($order->getUid());
        $updRecordOrders->setOrderProducts(count($this->orderproductsRepository->findByOrderId($order->getUid())));
        $this->ordersRepository->update($updRecordOrders);
        $persistenceManager->persistAll();

        $this->redirect('order', 'Auction', 'YourArt');
    }

    public function orderAction()
    {
        $items = $this->ordersRepository->findByUserId($GLOBALS['TSFE']->fe_user->user['uid']);
        $this->view->assign('orderItems', $items);
    }

}
